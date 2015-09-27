<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use View;
use App\Queries;

class MeetupController extends Controller
{
    public function index()
    {
        $query = new Queries\MeetupLatest();
        $meetups = $this->dispatch($query);
        return View::make('meetup.index', ['meetup' => $meetups, 'renderer' => $this->markdown_renderer]);
    }

    public function show($id)
    {
        $query = new Queries\Meetup( new \App\Domain\ValueObject\UUID($id) );
        $meetup = $this->dispatch($query);

        return View::make('meetup.show', ['article' => $meetup, 'renderer' => $this->markdown_renderer]);
    }
}
