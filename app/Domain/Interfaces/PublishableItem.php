<?php

namespace App\Domain\Interfaces;

use App\Domain\ValueObject\UUID;
use App\Domain\ValueObject\String;
use App\Domain\Interfaces\PublishableItem;

interface PublishableItem
{
    public static function make(UUID $id, String\NonBlank $title, String\NonBlank $author);

    function id();
    function title();
    function author();
    function date();
    function content();
}
