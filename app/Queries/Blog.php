<?php

namespace App\Queries;

use Illuminate\Contracts\Bus\SelfHandling;
use App\Domain\Repo\PostRepo;
use App\Domain\ValueObject;

class Blog extends Query implements SelfHandling
{
    private $id;
    
    public function __construct(ValueObject\PostID $id)
    {
        $this->id = $id;
    }

    /**
     * @return ValueObject\Post
     */
    public function handle(PostRepo $blog_repo)
    {
        return $blog_repo->fetch($this->id);
    }
}
