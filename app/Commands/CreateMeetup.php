<?php

namespace App\Commands;

use Illuminate\Contracts\Bus\SelfHandling;
use App\Domain\ValueObject\Meetup;

class CreateMeetup extends Command implements SelfHandling
{
    private $meetup;

    public function __construct(Meetup $meetup)
    {
        $this->meetup = $meetup;
    }

    public function handle(\App\Domain\Repo\MeetupRepo $meetup_repo)
    {
        $meetup_repo->store($this->meetup);
    }
}
