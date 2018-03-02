<?php

namespace App\Providers;

use App\Support\ThemeBladeDirectory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    const CONFIGURE = [
        'database', 'wordpress', 'services', 'view'
    ];
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app('view')->addNamespace('theme', ThemeBladeDirectory::get());
    }

    public function boot()
    {
        foreach (static::CONFIGURE as $config) {
            app()->configure($config);
        }
    }
}
