<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
<<<<<<< HEAD
     * These middleware are run during every request to your application.
     *
=======
>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
<<<<<<< HEAD
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
        ],

        'api' => [
            'throttle:60,1',
        ],
=======
        \App\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \App\Http\Middleware\VerifyCsrfToken::class,
>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8
    ];

    /**
     * The application's route middleware.
     *
<<<<<<< HEAD
     * These middleware may be assigned to groups or used individually.
     *
=======
>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
<<<<<<< HEAD
        'can' => \Illuminate\Foundation\Http\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
=======
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8
    ];
}
