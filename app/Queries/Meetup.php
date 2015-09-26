<?php

namespace App\Queries;

use Illuminate\Contracts\Bus\SelfHandling;
use App\Domain\Repo\MeetupRepo;
use App\Domain\ValueObject;

class Meeup extends Query implements SelfHandling
{
    private $id;
    
    public function __construct(ValueObject\UUID $id)
    {
        $this->id = $id;
    }

    /**
     * @return ValueObject\Meetup
     */
    public function handle(MeetupRepo $post_repo)
    {
        return $post_repo->fetch($this->id);
    }
}
