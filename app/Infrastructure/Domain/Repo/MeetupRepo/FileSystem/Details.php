<?php

namespace App\Infrastructure\Domain\Repo\MeetupRepo\FileSystem;

class Details
{
    public $title;
    public $author;
    public $date;
    public $time;
    public $place;
    public $map_link;
    public $meetup_link;
    public $sponsors;

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

    public static function make(\App\Domain\ValueObject\Meetup $meetup)
    {
        $details = new Details();
        $details->title = $meetup->title()->value();
        $details->author = $meetup->author()->value();
        $details->date = $meetup->date()->format("Y-m-d");
        return $details;
    }

    private function __construct()
    {

    }
}
