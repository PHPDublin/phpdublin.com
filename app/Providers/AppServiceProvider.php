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
        $this->app->singleton(
                \App\Domain\Repo\MeetupRepo::class,
                \App\Infrastructure\Domain\Repo\MeetupRepo\FileSystem::class
        );
        $this->app->singleton(
                \App\Domain\Repo\BlogRepo::class,
                \App\Infrastructure\Domain\Repo\BlogRepo\FileSystem::class
        );
    }
}
