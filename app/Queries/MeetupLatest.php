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
    public function handle(MeetupRepo $post_repo)
    {
        return $post_repo->latest();
    }
}
