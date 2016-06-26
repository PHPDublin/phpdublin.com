<?php

namespace App\Domain\ValueObject;

interface ID
{
    public function value();
    
    public function __toString();
}