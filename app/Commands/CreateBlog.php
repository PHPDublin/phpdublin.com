<?php

namespace App\Commands;

use Illuminate\Contracts\Bus\SelfHandling;
use App\Domain\ValueObject\Blog;

class CreateBlog extends Command implements SelfHandling
{
    private $blog;

    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function handle(\App\Domain\Repo\BlogRepo $blog_repo)
    {
        $blog_repo->store($this->blog);
    }
}
