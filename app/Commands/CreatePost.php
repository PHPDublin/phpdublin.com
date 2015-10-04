<?php

namespace App\Commands;

use Illuminate\Contracts\Bus\SelfHandling;
use App\Domain\ValueObject\Post;
use App\Domain\Repo\PostRepo;
use App\Domain\Invariant\PostIdIsUnique;

class CreatePost extends Command implements SelfHandling
{
    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function handle(PostRepo $post_repo, PostIdIsUnique $post_id_is_uniue)
    {
        $post_id_is_uniue->assert($this->post->id());
        $post_repo->store($this->post);
    }
}
