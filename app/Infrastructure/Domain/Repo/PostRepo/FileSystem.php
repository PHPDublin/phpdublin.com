<?php

namespace App\Infrastructure\Domain\Repo\PostRepo;

use League\Flysystem\Filesystem as FlyFileSystem;
use League\Flysystem\Adapter\Local;
use App\Domain\ValueObject;
use App\Domain\Repo\PostRepo;

class FileSystem implements PostRepo
{
    private $filesystem;

    public function __construct()
    {
        $adapter = new Local(storage_path('content/blogs'));
        $this->filesystem = new FlyFileSystem($adapter);
    }
        
    public function all()
    {
        $blog_folders = $this->filesystem->listContents();

        $blogs = [];
        foreach($blog_folders as $folder) {
            $id = new ValueObject\PostID($folder['path']);
            $blogs[] = $this->fetch($id);
        }

        usort($blogs, function(ValueObject\Post $post_a, ValueObject\Post $post_b){
            return $post_a->date()->lt($post_b->date());
        });

        return $blogs;
    }

    public function latest()
    {
        $posts = $this->all();

        return array_pop($posts);
    }
    
    public function has(ValueObject\PostID $id)
    {
        return $this->filesystem->has($this->details_filename($id));
    }

    /**
     * @param \App\Domain\ValueObject\UUID $id
     * @return \App\Domain\Interfaces\PublishableItem
     */
    public function fetch(ValueObject\PostID $id)
    {
        $details = FileSystem\Details::fromStdClass(
            json_decode($this->filesystem->read($this->details_filename($id)))
        );

        $title  = new ValueObject\PostTitle($details->title);
        $author = new ValueObject\String\NonBlank($details->author);
        $date   = ValueObject\Date\Past::parse($details->date);

        $content = new ValueObject\String\NonBlank(
            $this->filesystem->read($this->content_file($id))
        );

        return new ValueObject\Post($id, $title, $author, $date, $content);
    }

    private function details_filename(ValueObject\PostID $id)
    {
        return $id."/details.json";
    }

    private function content_file(ValueObject\PostID $id)
    {
        return $id."/post.md";
    }

    public function store(ValueObject\Post $blog)
    {
        $details = FileSystem\Details::make($blog);
        $this->filesystem->write($this->details_filename($blog->id()), json_encode($details, JSON_PRETTY_PRINT));
        $this->filesystem->write($this->content_file($blog->id()), $blog->content()->value());
    }
}

