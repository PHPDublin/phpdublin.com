<?php

namespace App\Domain\Repo;

use App\Domain\Interfaces;
use App\Domain\ValueObject\Blog;
use App\Domain\ValueObject\UUID;

interface BlogRepo
{
    /** @return Blog */
    public function latest();

    /** @return Blog[] */
    public function all();

    public function store(Interfaces\PublishableItem $blog);

    public function fetch(UUID $id);
}

