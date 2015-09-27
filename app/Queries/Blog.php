<?php

namespace App\Queries;

use Illuminate\Contracts\Bus\SelfHandling;
use App\Domain\Repo\BlogRepo;
use App\Domain\ValueObject;

class Blog extends Query implements SelfHandling
{
    private $id;
    
    public function __construct(ValueObject\UUID $id)
    {
        $this->id = $id;
    }

    /**
     * @return ValueObject\Blog
     */
    public function handle(BlogRepo $blog_repo)
    {
        return $blog_repo->fetch($this->id);
    }
}
