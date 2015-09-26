<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use View;
use App\Queries;

class BlogController extends Controller
{
    public function index()
    {
        $query = new Queries\PostList();
        $posts = $this->dispatch($query);
        return View::make('blog', ['posts' => $posts, 'renderer' => $this->markdown_renderer]);
    }

    public function show($id)
    {
        $query = new Queries\Post( new \App\Domain\ValueObject\UUID($id) );
        $post = $this->dispatch($query);

        return View::make('post', ['post' => $post, 'renderer' => $this->markdown_renderer]);
    }
}
