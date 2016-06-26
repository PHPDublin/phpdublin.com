<?php

namespace App\Domain\Invariant;

use App\Domain\Repo\PostRepo;
use App\Domain\ValueObject\PostID;

class PostIdIsUnique
{
    private $repo;
    
    public function __construct(PostRepo $repo)
    {
        $this->repo = $repo;
    }
    
    public function assert(PostID $id)
    {
        if ($this->repo->has($id)) {
            throw new \Exception("Post IDs must be unique, a post with ID '".$id->value()."' already exists");
        }
    }
}
