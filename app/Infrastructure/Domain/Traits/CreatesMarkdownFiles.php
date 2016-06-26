<?php

namespace App\Infrastructure\Domain\Traits;

use App\Domain\ValueObject;
use App\Domain\Interfaces;
use App\Infrastructure\Domain\Repo\BlogRepo\FileSystem;

trait CreatesMarkdownFiles
{

    public function all()
    {
        $blog_folders = $this->filesystem->listContents();

        $blogs = [];
        foreach($blog_folders as $folder) {
            $id = new ValueObject\UUID($folder['path']);
            $blogs[] = $this->fetch($id);
        }

        usort($blogs, function(Interfaces\PublishableItem $blog_a, Interfaces\PublishableItem $blog_b){
            return $blog_a->date()->lt($blog_b->date());
        });

        return $blogs;
    }

    public function latest()
    {
        $blogs = $this->all();

        return array_pop($blogs);
    }

    /**
     * @param \App\Domain\ValueObject\UUID $id
     * @return \App\Domain\Interfaces\PublishableItem
     */
    public function fetch(ValueObject\UUID $id)
    {
        $details = FileSystem\Details::fromStdClass(
            json_decode($this->filesystem->read($this->details_filename($id)))
        );

        $title  = new ValueObject\String\NonBlank($details->title);
        $author = new ValueObject\String\NonBlank($details->author);
        $date   = ValueObject\Date\Past::parse($details->date);

        $content = new ValueObject\String\NonBlank(
            $this->filesystem->read($this->content_file($id))
        );

        return new ValueObjectPostg($id, $title, $author, $date, $content);
    }

    private function details_filename(ValueObject\UUID $id)
    {
        return $id."/details.json";
    }

    private function content_file(ValueObject\UUID $id)
    {
        return $id."/post.md";
    }

    public function store(Interfaces\PublishableItem $blog)
    {
        $details = FileSystem\Details::make($blog);
        $this->filesystem->write($this->details_filename($blog->id()), json_encode($details, JSON_PRETTY_PRINT));
        $this->filesystem->write($this->content_file($blog->id()), $blog->content()->value());
    }
}

