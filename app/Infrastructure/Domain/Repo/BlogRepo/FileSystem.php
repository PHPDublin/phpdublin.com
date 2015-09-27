<?php

namespace App\Infrastructure\Domain\Repo\BlogRepo;

use App\Domain\ValueObject;
use App\Domain\Interfaces;
use App\Infrastructure\Domain\Traits;
use League\Flysystem\Filesystem as FlyFileSystem;
use League\Flysystem\Adapter\Local;

class FileSystem implements \App\Domain\Repo\BlogRepo
{
    use Traits\CreatesMarkdownFiles;

    private $filesystem;

    public function __construct()
    {
        $adapter = new Local(storage_path('data/blogs'));
        $this->filesystem = new FlyFileSystem($adapter);
    }
}

