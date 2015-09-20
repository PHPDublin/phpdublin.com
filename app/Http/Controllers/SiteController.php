<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use View;

class SiteController extends Controller
{
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
