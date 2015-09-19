<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;

class SiteController extends Controller
{
    public function __construct(Request $request)
    {
        view()->share('page_id', $request->path());
        view()->share('meetup_url', 'http://www.meetup.com/PHP-Dublin/events/224450191/');
    }
    
    public function home()
    {
        return View::make('home');
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
