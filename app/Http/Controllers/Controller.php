<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
<<<<<<< HEAD
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    protected $data;

    public function __construct()
    {
        $this->data = [
            'activePage' => null,
        ];
=======
use Illuminate\Http\Request;
use League\CommonMark;
use App\Queries;

abstract class Controller extends BaseController
{
    protected $markdown_renderer;

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(Request $request)
    {
        $this->markdown_renderer = new CommonMark\CommonMarkConverter();
        view()->share('page_id', $request->path());
        view()->share('meetup_url', 'http://www.meetup.com/PHP-Dublin/events/225356604/');

        $query = new Queries\BlogList();
        $blogs = $this->dispatch($query);
        return view()->share(['blogs' => $blogs, 'renderer' => $this->markdown_renderer]);
>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8
    }
}
