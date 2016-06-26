<?php

namespace PhpDublin\AppTest\Domain\ValueObject;

use App\Domain\ValueObject\Date\Past;
use App\Domain\ValueObject\Post;
use App\Domain\ValueObject\String\NonBlank;
use App\Domain\ValueObject\UUID;
use Carbon\Carbon;
use PhpDublin\AppTest\TestCase;

class PostTest extends TestCase
{
    /**
     * @test
     */
    public function createFromAttributes()
    {
        $post = new Post(
            $uuid = UUID::make(),
            $title = new NonBlank("::Some Title::"),
            $author = new NonBlank("::Some Author::"),
            $date = new Past("2014-04-04 04:44:40"),
            $content = new NonBlank("::Some Content::")
        );

        $this->assertEquals($uuid, $post->id());
        $this->assertEquals($title, $post->title());
        $this->assertEquals($author, $post->author());
        $this->assertEquals($date, $post->date());
        $this->assertEquals($content, $post->content());
    }

    /**
     * @test
     */
    public function generateNewPost()
    {
        Carbon::setTestNow(Carbon::createFromTimestamp(1400000000));

        $post = Post::make(
            $uuid = UUID::make(),
            $title = new NonBlank("::Some Title::"),
            $author = new NonBlank("::Some Author::")
        );

        $this->assertEquals($uuid, $post->id());
        $this->assertEquals($title, $post->title());
        $this->assertEquals($author, $post->author());
        $this->assertSame(1400000000, $post->date()->timestamp);
        $this->assertSame("Add your content here", $post->content()->value());
    }
}
