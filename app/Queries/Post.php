<?php

namespace App\Queries;

use Illuminate\Contracts\Bus\SelfHandling;
use App\Domain\Repo\PostRepo;
use App\Domain\ValueObject;

class Post extends Query implements SelfHandling
{
    private $id;
    
    public function __construct(ValueObject\UUID $id)
    {
        $this->id = $id;
    }

    /**
     * @return ValueObject\Post
     */
    public function handle(PostRepo $post_repo)
    {
        return $post_repo->fetch($this->id);
    }
}
