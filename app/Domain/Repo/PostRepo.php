<?php

namespace App\Domain\Repo;

use App\Domain\ValueObject\Post;
use App\Domain\ValueObject\PostId;

interface PostRepo
{
    /** @return Post */
    public function latest();

    /** @return Post[] */
    public function all();

    public function store(Post $blog);

    public function fetch(PostId $id);
    
    public function has(PostID $id);
}

