<?php

namespace App\Infrastructure\Domain\Repo\PostRepo;

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
        $adapter = new Local(public_path().'/post');
        $this->filesystem = new FlyFileSystem($adapter);
    }
}

