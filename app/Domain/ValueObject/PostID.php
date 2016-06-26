<?php

namespace App\Domain\ValueObject;

class PostID extends String\NonBlank implements ID 
{
    public function __construct($value)
    {
         $formatted_value = str_slug($value);
         if ($value != $formatted_value) {
             throw new \Exception("The ID must be a URL safe slug");
         }
         parent::__construct($value);
    }
    
    public static function make($value)
    {
        return new static(str_slug($value));
    }
}