<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Queries;
use View;

class SiteController extends Controller
{
    public function home()
    {
        $query = new Queries\PostList();
        $posts = $this->dispatch($query);
        return View::make('home', ['posts' => $posts, 'renderer' => $this->markdown_renderer]);
    }

    public function code_of_conduct()
    {
        return View::make('code_of_conduct');
    }

    public function contact_us()
    {
        return View::make('contact_us');
    }
}
