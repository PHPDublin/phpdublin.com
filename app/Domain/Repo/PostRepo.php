<?php

namespace App\Domain\Repo;

use App\Domain\ValueObject\Post;
use App\Domain\ValueObject\UUID;

interface PostRepo
{
    /** @return Post */
    public function latest();
    
    /** @return Post[] */
    public function all();
    
    public function store(Post $post);
    
    public function fetch(UUID $id);
}

