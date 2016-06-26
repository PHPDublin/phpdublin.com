<?php

namespace App\Queries;

use Illuminate\Contracts\Bus\SelfHandling;
use App\Domain\Repo\MeetupRepo;
use App\Domain\ValueObject\Meetup;

class MeetupLatest extends Query implements SelfHandling
{
    /**
     * @return Meetup
     */
    public function handle(MeetupRepo $meetup_repo)
    {
        return $meetup_repo->latest();
    }
}
