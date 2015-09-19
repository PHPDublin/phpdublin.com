<?php

namespace App\Commands;

use App\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Domain\Repo\PostRepo;
use App\Domain\ValueObject\Post;

class PostTitles extends Command implements SelfHandling
{
    /**
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * @return Post[]
     */
    public function handle(PostRepo $post_repo)
    {
        return $post_repo->all();
    }
}
