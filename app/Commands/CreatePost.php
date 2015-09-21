<?php

namespace App\Commands;

use App\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Domain\ValueObject\Post;

class CreatePost extends Command implements SelfHandling
{
    private $post;
    private $title;
    private $author;
            
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function handle(\App\Domain\Repo\PostRepo $post_repo)
    {
        $post_repo->store($this->post);
    }
}
