<?php

namespace App\Exceptions;

use Exception;
<<<<<<< HEAD
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
=======
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
<<<<<<< HEAD
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
=======
        HttpException::class,
        ModelNotFoundException::class,
>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
<<<<<<< HEAD
        parent::report($e);
=======
        return parent::report($e);
>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
<<<<<<< HEAD
=======
        if ($e instanceof ModelNotFoundException) {
            $e = new NotFoundHttpException($e->getMessage(), $e);
        }

>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8
        return parent::render($request, $e);
    }
}
