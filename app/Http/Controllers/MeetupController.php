<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use View;
use League\CommonMark;
use App\Queries;

class MeetupController extends Controller
{
    private $markdown_renderer;

    public function __construct(\Illuminate\Http\Request $request)
    {
        parent::__construct($request);
        $this->markdown_renderer = new CommonMark\CommonMarkConverter();
    }

    public function index()
    {
        $query = new Queries\MeetupList();
        $meetups = $this->dispatch($query);
        return View::make('blog', ['posts'=>$meetups, 'renderer'=>$this->markdown_renderer]);
    }

    public function meetup($id)
    {
        $query = new Queries\Meetup( new \App\Domain\ValueObject\UUID($id) );
        $meetup = $this->dispatch($query);

        return View::make('meetup', ['meetup'=>$meetup, 'renderer'=>$this->markdown_renderer]);
    }
}
