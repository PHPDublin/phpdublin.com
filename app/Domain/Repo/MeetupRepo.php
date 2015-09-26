<?php

namespace App\Domain\Repo;

use App\Domain\Interfaces;
use App\Domain\ValueObject\Meetup;
use App\Domain\ValueObject\UUID;

interface MeetupRepo
{
    /** @return Meetup */
    public function latest();
    
    /** @return Meetup[] */
    public function all();
    
    public function store(Interfaces\PublishableItem $post);
    
    public function fetch(UUID $id);
}

