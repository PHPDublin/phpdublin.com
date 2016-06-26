<?php

namespace App\Entities;

use Carbon\Carbon;
use DMS\Service\Meetup\Response\SingleResultResponse;

class MeetupEvent
{
    private $data;

    public static function createFromApiSingleResultResponse (SingleResultResponse $response)
    {
        $meetupEvent = new self;
        return $meetupEvent->fromApiSingleResultResponse($response);
    }

    public static function createFromArray($array)
    {
        $meetupEvent = new self;
        return $meetupEvent->fromArray($array);
    }

    public function fromApiSingleResultResponse (SingleResultResponse $response)
    {
        $collection = collect();
        foreach ($response->getData() as $data) {
            $collection->push(self::createFromArray($data));
        }

        $this->data = $collection;

        return $this;
    }

    public function fromArray($data)
    {
        $this->data = collect([
            "created"        => empty($data['created'])        ? null : Carbon::createFromTimestamp($data['created']/1000),
            "duration"       => empty($data['duration'])       ? null : $data['duration'],
            "meetup_id"      => empty($data['id'])             ? null : $data['id'],
            "name"           => empty($data['name'])           ? null : $data['name'],
            "status"         => empty($data['status'])         ? null : $data['status'],
            "start_at"       => empty($data['time'])           ? null : $startAt = Carbon::createFromTimestamp($data['time']/1000),
            "finish_at"      => empty($data['duration'])       ? null : $startAt->addSeconds($data['duration']),
            "updated"        => empty($data['updated'])        ? null : Carbon::createFromTimestamp($data['updated']/1000),
            "utc_offset"     => empty($data['utc_offset'])     ? null : $data['utc_offset'],
            "waitlist_count" => empty($data['waitlist_count']) ? null : $data['waitlist_count'],
            "yes_rsvp_count" => empty($data['yes_rsvp_count']) ? null : $data['yes_rsvp_count'],
            "venue"          => empty($data['venue'])          ? null : collect($data['venue']),
            "link"           => empty($data['link'])           ? null : $data['link'],
            "description"    => empty($data['description'])    ? null : $data['description'],
        ]);

        return $this;
    }

    public function get($key = null) {
        return $key ? $this->data->get($key) : $this->data;
    }

    public function forPage($page, $perPage) {
        return $this->get()->forPage($page, $perPage);
    }

    public function count() {
        return $this->get()->count();
    }
}
