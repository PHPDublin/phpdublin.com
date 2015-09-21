<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use View;
use League\CommonMark;
use App\Queries;

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
        $query = new Queries\PostList();
        $posts = $this->dispatch($query); 
        return View::make('blog', ['posts'=>$posts, 'renderer'=>$this->markdown_renderer]);
    }
    
    public function post($id)
    {
        $query = new Queries\Post( new \App\Domain\ValueObject\UUID($id) );
        $post = $this->dispatch($query); 
        
        return View::make('post', ['post'=>$post, 'renderer'=>$this->markdown_renderer]);
    }
}
