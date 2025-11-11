<?php

namespace Sudipta\HelloWorld;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class HelloWorldServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Register a simple route for testing
        Route::get('/hello-world', function () {
            return 'Hello World';
        });
    }

    public function register()
    {
        // You can bind things to the service container here later
    }
}
