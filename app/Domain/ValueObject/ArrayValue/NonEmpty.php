<?php

namespace App\Domain\ValueObject\ArrayValue;

class NonEmpty
{
    private $value;

    public function __construct($value)
    {
        if (!is_array($value)) {
            throw new \Exception("Passed value is not a array");
        }
        if (empty($value)) {
            throw new \Exception("The array value cannot be empty");
        }

        $this->value = $value;
    }

    public function value()
    {
        return $this->value;
    }

    public function slug()
    {
        return str_slug($this->value);
    }
}
