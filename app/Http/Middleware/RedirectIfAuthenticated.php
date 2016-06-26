<?php

namespace App\Http\Middleware;

use Closure;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
use Illuminate\Contracts\Auth\Guard;
>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8

class RedirectIfAuthenticated
{
    /**
<<<<<<< HEAD
=======
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
<<<<<<< HEAD
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/');
=======
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->check()) {
            return redirect('/home');
>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8
        }

        return $next($request);
    }
}
