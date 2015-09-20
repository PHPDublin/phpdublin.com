<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use View;
use League\CommonMark;

class BlogController extends Controller
{
    private $markdown_renderer;
    
    public function __construct(\Illuminate\Http\Request $request)
    {
        parent::__construct($request);
        $this->markdown_renderer = new CommonMark\CommonMarkConverter();    
    }
    
    public function all()
    {
        $query = new \App\Commands\PostList();
        $posts = $this->dispatch($query); 
        return View::make('blog', ['posts'=>$posts, 'renderer'=>$this->markdown_renderer]);
    }
    
    public function post($id)
    {
        $query = new \App\Commands\PostLatest();
        $post = $query->handle();
        
        return View::make('blog', ['post'=>$post, 'renderer'=>$this->markdown_renderer]);
    }
}
