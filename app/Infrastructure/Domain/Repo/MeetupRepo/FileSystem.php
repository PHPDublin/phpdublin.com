<?php

namespace App\Infrastructure\Domain\Repo\MeetupRepo;

use App\Domain\ValueObject;
use App\Domain\Interfaces;
use App\Infrastructure\Domain\Traits;
use League\Flysystem\Filesystem as FlyFileSystem;
use League\Flysystem\Adapter\Local;

class FileSystem implements \App\Domain\Repo\MeetupRepo
{
    use Traits\CreatesMarkdownFiles;

    private $filesystem;

    public function __construct()
    {
        $adapter = new Local(storage_path('content/meetups'));
        $this->filesystem = new FlyFileSystem($adapter);
    }

    /**
     * @param \App\Domain\ValueObject\UUID $id
     * @return \App\Domain\Interfaces\PublishableItem
     */
    public function fetch(ValueObject\UUID $id)
    {
        $details = FileSystem\Details::fromStdClass(
            json_decode($this->filesystem->read($this->details_filename($id)))
        );

        $content = new ValueObject\String\NonBlank(
            $this->filesystem->read($this->content_file($id))
        );

        return new ValueObject\Meetup(
            $id,
            new ValueObject\String\NonBlank($details->title),
            new ValueObject\String\NonBlank($details->author),
            new ValueObject\Date\Past($details->date),
            $content,
            new ValueObject\String\ToTime($details->time),
            new ValueObject\String\NonBlank($details->place),
            new ValueObject\String\NonBlank($details->map_link),
            new ValueObject\String\NonBlank($details->meetup_link),
            new ValueObject\ArrayValue\NonEmpty($details->sponsors)
        );
    }
}

