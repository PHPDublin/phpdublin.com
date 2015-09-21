<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Bus\Dispatcher;

class CreatePost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:make {title} {github_username}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new blog post';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(Dispatcher $dispatcher)
    {
        $id = \App\Domain\ValueObject\UUID::make();
        $title = new \App\Domain\ValueObject\String\NonBlank(
                $this->argument("title")
        );
        $author = new \App\Domain\ValueObject\String\NonBlank(
            $this->argument("github_username")    
        );
        
        $post = \App\Domain\ValueObject\Post::make($id, $title, $author);
        
        $dispatcher->dispatch( new \App\Commands\CreatePost($post));
        
        $this->info("Post $id created.");
    }
}
