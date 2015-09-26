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

    public static function make(UUID $id, String\NonBlank $title, String\NonBlank $author)
    {
        $date = Date\Past::now();
        $content = new String\NonBlank("Add your content here");
        $meetup = new Meetup($id, $title, $author, $date, $content);

        return $meetup;
    }

    public function __construct(UUID $id, String\NonBlank $title, String\NonBlank $author, Date\Past $date, String\NonBlank $content)
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->date = $date;
        $this->content = $content;
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
}
