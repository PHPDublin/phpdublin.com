<?php

namespace App\Infrastructure\Domain\Repo\BlogRepo\FileSystem;

class Details
{
    public $title;
    public $author;
    public $date;

    public static function fromStdClass($std_class)
    {
        $details = new Details();
        foreach ($details as $key=>$value) {
            if (!isset($std_class->$key) || !$std_class->$key) {
                throw new \Exception("Key '$key' cannot be blank");
            }
            $details->$key = $std_class->$key;
        }
        return $details;
    }

    public static function make(\App\Domain\Interfaces\PublishableItem $blog)
    {
        $details = new Details();
        $details->title = $blog->title()->value();
        $details->author = $blog->author()->value();
        $details->date = $blog->date()->format("Y-m-d");
        return $details;
    }

    private function __construct()
    {

    }
}
