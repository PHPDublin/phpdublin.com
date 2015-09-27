<?php

namespace App\Domain\ValueObject\String;

class ToTime
{
    private $value;

    public function __construct($value)
    {
        if (!strtotime($value)) {
            throw new \Exception("Passed value could not be converted to unix time");
        }
        if (strlen(trim($value)) == 0) {
            throw new \Exception("The string value cannot be blank, or just whitespace");
        }

        $this->value = strtotime($value);
    }

    public function value()
    {
        return $this->value;
    }

    public function humanReadable()
    {
        return date('F jS Y @ H:i', $this->value());
    }
}
