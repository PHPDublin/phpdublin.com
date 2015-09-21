<?php

namespace App\Infrastructure\Domain\Repo\PostRepo;

use App\Domain\ValueObject;
use League\Flysystem\Filesystem as FlyFileSystem;
use League\Flysystem\Adapter\Local;

class FileSystem implements \App\Domain\Repo\PostRepo
{
    private $filesystem;
    
    public function __construct()
    {
        $adapter = new Local(public_path().'/post');
        $this->filesystem = new FlyFileSystem($adapter);
    }
    
    public function all()
    {
        $post_folders = $this->filesystem->listContents();

        $posts = [];
        foreach($post_folders as $folder) {
            $id = new ValueObject\UUID($folder['path']);
            $posts[] = $this->load_post($id);
        }
        
        usort($posts, function(ValueObject\Post $post_a, ValueObject\Post $post_b){
            return $post_a->date()->lt($post_b->date());
        });
        
        return $posts;
    }

    public function latest()
    {
        $posts = $this->all();
        
        return array_pop($posts);
    }
    
    private function load_post(ValueObject\UUID $id)
    {
        $details = FileSystem\Details::fromStdClass(
            json_decode($this->filesystem->read($this->details_filename($id)))
        );
        $title = new ValueObject\String\NonBlank($details->title);
        $author = new ValueObject\String\NonBlank($details->author);
        $date = ValueObject\Date\Past::parse($details->date);
        
        $content = new ValueObject\String\NonBlank(
            $this->filesystem->read($this->content_file($id))
        );
        
        return new ValueObject\Post($id, $title, $author, $date, $content);
    }
    
    private function details_filename(ValueObject\UUID $id)
    {
        return $id."/details.json";
    }
    
    private function content_file(ValueObject\UUID $id)
    {
        return $id."/post.md";
    }
       
    public function store(ValueObject\Post $post)
    {
        $details = FileSystem\Details::make($post);
        $this->filesystem->write($this->details_filename($post->id()), json_encode($details));
        $this->filesystem->write($this->content_file($post->id()), $post->content()->value());
    }
}

