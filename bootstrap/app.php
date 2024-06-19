<?php

use App\Http\Middleware\AdminCheck;
use App\Http\Middleware\TeacherCheck;
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
        // $middleware->append(AdminCheck::class);
        $middleware->alias([
            'isAdmin:0' => AdminCheck::class,
            'isTeacher' => TeacherCheck::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();