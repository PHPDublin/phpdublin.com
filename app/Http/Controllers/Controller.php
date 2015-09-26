<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
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

        $query = new Queries\PostList();
        $posts = $this->dispatch($query);
        return view()->share(['posts' => $posts, 'renderer' => $this->markdown_renderer]);
    }
}
