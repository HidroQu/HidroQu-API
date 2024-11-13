<?php

<<<<<<< HEAD
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
=======
use App\Enums\HttpStatus;
use App\Exceptions\EmailAlreadyVerifiedException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
>>>>>>> 1ed05d27a7cf184078f0999c715826d77a53e192

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
<<<<<<< HEAD
        commands: __DIR__.'/../routes/console.php',
=======
        api: __DIR__.'/../routes/api.php',
>>>>>>> 1ed05d27a7cf184078f0999c715826d77a53e192
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
<<<<<<< HEAD
        //
=======
        $exceptions->renderable(function (Throwable $e, Request $request) {
            if ($request->is(patterns: 'api/*')) {
                $status = match (true) {
                    $e instanceof NotFoundHttpException => HttpStatus::NotFound,
                    $e instanceof AuthenticationException => HttpStatus::Unauthorized,
                    $e instanceof ValidationException, $e instanceof EmailAlreadyVerifiedException => HttpStatus::UnprocessableEntity,
                    default => HttpStatus::InternalServerError,
                };

                $message = $status === HttpStatus::InternalServerError
                    ? 'Internal server error, cannot processed the request.'
                    : $e->getMessage();

                $errors = $e instanceof ValidationException ? $e->errors() : [];

                return response()->json(
                    data: [
                        'status' => 'error',
                        'message' => $message,
                        'errors' => $errors,
                    ],
                    status: $status->value,
                );
            }

            return null;
        });
>>>>>>> 1ed05d27a7cf184078f0999c715826d77a53e192
    })->create();
