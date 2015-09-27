<?php

namespace App\Domain\ValueObject;

use App\Domain\ValueObject\String;
use App\Domain\Interfaces\PublishableItem;

class Meetup implements PublishableItem
{
    private $id;
    private $title;
    private $author;
    private $date;
    private $content;
    private $time;
    private $place;
    private $map_link;
    private $meetup_link;
    private $sponsors;

    /**
     * Make a new empty .md file
     *
     * @param UUID $id
     * @param String\NonBlank $title
     * @param String\NonBlank $author
     */
    public static function make(
        UUID $id,
        String\NonBlank $title,
        String\NonBlank $author
    )
    {
        $date    = Date\Past::now();
        $content = new String\NonBlank("Add your content here");
        $meetup  = new Meetup($id, $title, $author, $date, $content);

        return $meetup;
    }

    public function __construct(
        UUID            $id,
        String\NonBlank $title,
        String\NonBlank $author,
        Date\Past       $date,
        String\NonBlank $content,
        String\ToTime   $time,
        String\NonBlank $place,
        String\NonBlank $map_link,
        String\NonBlank $meetup_link,
        ArrayValue\NonEmpty $sponsors
    )
    {
        $this->id          = $id;
        $this->title       = $title;
        $this->author      = $author;
        $this->date        = $date;
        $this->content     = $content;
        $this->time        = $time;
        $this->place       = $place;
        $this->map_link    = $map_link;
        $this->meetup_link = $meetup_link;
        $this->sponsors    = $sponsors;
    }

    function id()
    {
        return $this->id;
    }

    function title()
    {
        return $this->title;
    }

    function author()
    {
        return $this->author;
    }

    function date()
    {
        return $this->date;
    }

    function content()
    {
        return $this->content;
    }

    function time()
    {
        return $this->time;
    }

    function place()
    {
        return $this->place;
    }

    function map_link()
    {
        return $this->map_link;
    }

    function meetup_link()
    {
        return $this->meetup_link;
    }

    function sponsors()
    {
        return $this->sponsors;
    }

}
