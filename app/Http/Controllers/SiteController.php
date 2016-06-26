<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Queries;
use View;

class SiteController extends Controller
{
    public function home()
    {
        $query = new Queries\BlogList();
        $blogs = $this->dispatch($query);
        return View::make('pages.home', ['blogs' => $blogs, 'renderer' => $this->markdown_renderer]);
    }

    public function code_of_conduct()
    {
        return View::make('pages.code_of_conduct');
    }

    public function contact_us()
    {
        return View::make('pages.contact_us');
    }
}
