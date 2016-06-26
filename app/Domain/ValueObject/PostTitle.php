<?php

namespace App\Domain\ValueObject;

class PostTitle extends String\NonBlank implements ID 
{
    public function to_post_id()
    {
        return PostId::make($this->value());
    }
}