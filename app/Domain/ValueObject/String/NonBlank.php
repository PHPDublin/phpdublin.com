<?php

namespace App\Domain\ValueObject\String;

class NonBlank
{
    private $value;

    public function __construct($value)
    {
        if (!is_string($value)) {
            throw new \Exception("Passed value is not a string");
        }
        if (strlen(trim($value)) == 0) {
            throw new \Exception("The string value cannot be blank, or just whitespace");
        }

        $this->value = $value;
    }

    public function value()
    {
        return $this->value;
    }
    
    public function __toString()
    {
        return $this->value;
    }
}
