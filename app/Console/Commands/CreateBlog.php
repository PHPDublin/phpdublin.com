<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Bus\Dispatcher;
use App\Domain\ValueObject;

class CreateBlog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:make {title} {github_username}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new blog blog';

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
        $title = new ValueObject\PostTitle( $this->argument("title") );
        $author = new ValueObject\String\NonBlank(
            $this->argument("github_username")
        );

        $blog = ValueObject\Post::make($title->to_post_id(), $title, $author);

        $dispatcher->dispatch( new \App\Commands\CreatePost($blog) );

        $this->info("Blog '".$title->to_post_id()."' created.");
    }
}
