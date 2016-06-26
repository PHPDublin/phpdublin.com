<?php

namespace App;

use DMS\Service\Meetup\MeetupKeyAuthClient;
use DMS\Service\Meetup\Response\SingleResultResponse;
use Carbon\Carbon;
use Cache;
use App\Entities\MeetupEvent;

class Meetup
{
    protected $client;
    private $apiKey;
    private $groupUrlname;

    public function __construct(MeetupKeyAuthClient $meetup)
    {
        $this->apiKey = env('MEETUP_API_KEY');
        $this->groupUrlname = env('MEETUP_GROUP_URLNAME');

        // Key Authentication
        $this->client = $meetup->factory(['key' => $this->apiKey]);
    }

    public function setGroupUrlname($str)
    {
        $this->groupUrlname = $str;
    }

    protected function request($action, $options, $refreshCache = false)
    {
        $cacheKey = $action . '__' . implode($options,'--');

        if ($refreshCache) {
            $command = $this->client->getCommand($action, array_merge([
                'urlname' => $this->groupUrlname,
            ], $options));

            $command->prepare();
            $response = $command->execute();
            Cache::put($cacheKey, $response, 120);

            return $response;
        }

        return Cache::get($cacheKey, function() use ($action, $options) {
            return $this->request($action, $options, true);
        });
    }

    public function upcoming()
    {
        $response = $this->request('GetGroupEvents', [
            'status' => 'upcoming'
        ]);

        return MeetupEvent::createFromApiSingleResultResponse($response);
    }

    public function past()
    {
        $response = $this->request('GetGroupEvents', [
            'status' => 'past'
        ]);

        return MeetupEvent::createFromApiSingleResultResponse($response);
    }

    public function all()
    {
        $response = $this->request('GetGroupEvents', [
            'status' => 'upcoming,past'
        ]);

        return MeetupEvent::createFromApiSingleResultResponse($response);
    }
}
