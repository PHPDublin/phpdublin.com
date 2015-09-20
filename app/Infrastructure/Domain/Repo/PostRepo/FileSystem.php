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
        return $posts;
    }

    public function latest()
    {
        $posts = $this->all();
        
        usort($posts, function(ValueObject\Post $post_a, ValueObject\Post $post_b){
            return $post_a->date()->gt($post_b->date());
        });
        
        return array_pop($posts);
    }
    
    private function load_post(ValueObject\UUID $id)
    {
        $details = json_decode($this->filesystem->read($id."/details.json"));
        $title = new ValueObject\String\NonBlank($details->title);
        $author = new ValueObject\String\NonBlank($details->author);
        $date = ValueObject\Date\Past::parse($details->date);
        
        $post_file = $id."/post.md";
        $content = new ValueObject\String\NonBlank($this->filesystem->read($post_file));
        
        return new ValueObject\Post($id, $title, $author, $date, $content);
    }
}

