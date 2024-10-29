<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        commands: __DIR__.'/../routes/console.php',
        using:function(){

            Route::middleware('web')
            ->group(base_path('routes/web.php'));

            Route::middleware('web')
            ->group(base_path('routes/robert.php'));

            Route::middleware('web')
            ->group(base_path('routes/isa.php'));

            Route::middleware('web')
            ->group(base_path('routes/jose.php'));

            Route::middleware('web')
            ->group(base_path('routes/sam.php'));

            Route::middleware('web')
            ->group(base_path('routes/ivan.php'));
        },
    )


    
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
