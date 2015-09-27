<?php

namespace App\Queries;

use Illuminate\Contracts\Bus\SelfHandling;
use App\Domain\Repo\BlogRepo;
use App\Domain\ValueObject\Blog;

class BlogList extends Query implements SelfHandling
{
    /**
     * @return Blog[]
     */
    public function handle(BlogRepo $blog_repo)
    {
        return $blog_repo->all();
    }
}
