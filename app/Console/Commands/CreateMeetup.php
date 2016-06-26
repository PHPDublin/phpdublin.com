<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Bus\Dispatcher;

class CreateMeetup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'meetup:make {title} {github_username}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new blog meetup';

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

        $meetup = \App\Domain\ValueObject\Meetup::make($id, $title, $author);

        $dispatcher->dispatch( new \App\Commands\CreateMeetup($meetup));

        $this->info("Meetup $id created.");
    }
}
