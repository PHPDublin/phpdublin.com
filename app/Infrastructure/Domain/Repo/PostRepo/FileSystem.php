<?php

namespace App\Infrastructure\Domain\Repo\PostRepo;

use App\Domain\ValueObject;

class FileSystem implements \App\Domain\Repo\PostRepo
{
    public function all()
    {
        return [$this->latest(), $this->latest()];
    }

    public function latest()
    {
        $id = ValueObject\UUID::make("0000-000-00-000");
        $title = new ValueObject\String\NonBlank("title");
        $author = new ValueObject\String\NonBlank("author");
        $date = new ValueObject\Date\Past("2014-01-04");
        $content = new ValueObject\String\NonBlank("markdown");
        return new Post($id, $title, $author, $date, $content);
    }
}

