<?php

namespace App\Infrastructure\Domain\Traits;

use App\Domain\ValueObject;
use App\Domain\Interfaces;
use App\Infrastructure\Domain\Repo\PostRepo\FileSystem;

trait CreatesMarkdownFiles
{

    public function all()
    {
        $post_folders = $this->filesystem->listContents();

        $posts = [];
        foreach($post_folders as $folder) {
            $id = new ValueObject\UUID($folder['path']);
            $posts[] = $this->fetch($id);
        }

        usort($posts, function(Interfaces\PublishableItem $post_a, Interfaces\PublishableItem $post_b){
            return $post_a->date()->lt($post_b->date());
        });

        return $posts;
    }

    public function latest()
    {
        $posts = $this->all();

        return array_pop($posts);
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

    public function store(Interfaces\PublishableItem $post)
    {
        $details = FileSystem\Details::make($post);
        $this->filesystem->write($this->details_filename($post->id()), json_encode($details, JSON_PRETTY_PRINT));
        $this->filesystem->write($this->content_file($post->id()), $post->content()->value());
    }
}

