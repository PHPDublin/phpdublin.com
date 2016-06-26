<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
<<<<<<< HEAD
        //
=======
        $this->app->singleton(
                \App\Domain\Repo\MeetupRepo::class,
                \App\Infrastructure\Domain\Repo\MeetupRepo\FileSystem::class
        );
        $this->app->singleton(
                \App\Domain\Repo\PostRepo::class,
                \App\Infrastructure\Domain\Repo\PostRepo\FileSystem::class
        );
>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8
    }
}
