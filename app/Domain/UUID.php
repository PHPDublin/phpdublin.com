<?php

namespace App\Domain\ValueObject;

use Rhumsaa\Uuid\Uuid as RhumsaaUUID;

class UUID
{
    private $id;
    
    public function __construct($id)
    {
        $this->id = RhumsaaUUID::fromString($id);
    }
    
    public function value()
    {
        return $this->id->toString();
    }
    
    public function __toString()
    {
        return $this->value();
    }
}