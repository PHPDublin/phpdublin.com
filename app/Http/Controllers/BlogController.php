<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use View;
use App\Queries;

class BlogController extends Controller
{
    public function index()
    {
        $query = new Queries\BlogList();
        $blogs = $this->dispatch($query);
        return View::make('blog.index', ['blogs' => $blogs, 'renderer' => $this->markdown_renderer]);
    }

    public function show($id)
    {
        $query = new Queries\Blog( new \App\Domain\ValueObject\PostID($id) );
        $blog = $this->dispatch($query);

        return View::make('blog.show', ['article' => $blog, 'renderer' => $this->markdown_renderer]);
    }
}
