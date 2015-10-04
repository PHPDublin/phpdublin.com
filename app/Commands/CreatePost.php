<?php

namespace App\Commands;

use Illuminate\Contracts\Bus\SelfHandling;
use App\Domain\ValueObject\Post;

class CreatePost extends Command implements SelfHandling
{
    private $blog;

    public function __construct(Post $blog)
    {
        $this->blog = $blog;
    }

    public function handle(\App\Domain\Repo\PostRepo $blog_repo)
    {
        $blog_repo->store($this->blog);
    }
}
