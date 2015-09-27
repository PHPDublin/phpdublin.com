<?php

namespace App\Queries;

use Illuminate\Contracts\Bus\SelfHandling;
use App\Domain\Repo\MeetupRepo;
use App\Domain\ValueObject\Meetup;

class MeetupList extends Query implements SelfHandling
{
    /**
     * @return Meetup[]
     */
    public function handle(MeetupRepo $post_repo)
    {
        return $post_repo->all();
    }
}
