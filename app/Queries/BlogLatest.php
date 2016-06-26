<?php

namespace App\Queries;

use Illuminate\Contracts\Bus\SelfHandling;
use App\Domain\Repo\PostRepo;
use App\Domain\ValueObject\Post;

class BlogLatest extends Query implements SelfHandling
{
    /**
     * @return Post
     */
    public function handle(PostRepo $blog_repo)
    {
        return $blog_repo->latest();
    }
}
