<?php

namespace App\Commands;

use Illuminate\Contracts\Bus\SelfHandling;
use App\Domain\ValueObject\Post;

class CreatePost extends Command implements SelfHandling
{
    private $post;
            
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function handle(\App\Domain\Repo\PostRepo $post_repo)
    {
        $post_repo->store($this->post);
    }
}
