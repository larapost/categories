<?php

namespace Larapost\Categorie\Support;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/migrations' => 'database/migrations/',
        ]);
    }
}