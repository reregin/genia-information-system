<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {

        $exceptions->render(function (AuthenticationException $e, Request $request) {
            // Check if the request expects JSON (common for APIs)
            if ($request->expectsJson()) {
                return response()->json(['message' => $e->getMessage()], 401);
            }

            // Check if the request URL starts with /admin/
            if ($request->is('admin') || $request->is('admin/*')) {
                // Redirect to the admin login page using the URL path
                return redirect()->guest('/admin/login');
            }

            // Default fallback for any other unauthenticated requests.
            // This line will still cause an error if no global 'login' route exists
            // and a non-admin authenticated route is accessed.
            return redirect()->guest(route('login'));
        });

    })->create();
