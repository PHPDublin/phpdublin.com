<?php

namespace App\Domain\Repo;

use App\Domain\ValueObject\Post;

interface PostRepo
{
    /** @return Post */
    public function latest();
    
    /** @return Post[] */
    public function all();
}

