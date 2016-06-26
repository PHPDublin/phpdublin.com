<?php

<<<<<<< HEAD
abstract class TestCase extends Illuminate\Foundation\Testing\TestCase
=======
class TestCase extends Illuminate\Foundation\Testing\TestCase
>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }
}
