<?php

namespace Sword;

use Illuminate\Support\ServiceProvider;
use Sword\Sword;

class SwordServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('sword', function () {
            return new Sword();
        });
    }
}
