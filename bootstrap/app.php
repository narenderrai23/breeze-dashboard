<?php

use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->redirectUsersTo(function (Request $request) {
            //if guard is admin redirect to admin/login
            if ($request->routeIs('login')) {
                return 'admin/dashboard';
            }
        });
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
