<?php

namespace App\Infrastructure\Domain\Repo\MeetupRepo;

use App\Domain\ValueObject;
use App\Domain\Interfaces;
use App\Infrastructure\Domain\Traits;
use League\Flysystem\Filesystem as FlyFileSystem;
use League\Flysystem\Adapter\Local;

class FileSystem implements \App\Domain\Repo\PostRepo
{
    use Traits\CreatesMarkdownFiles;

    private $filesystem;

    public function __construct()
    {
        $adapter = new Local(storage_path('app/meetups'));
        $this->filesystem = new FlyFileSystem($adapter);
    }
}

