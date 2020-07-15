<?php

namespace DigitalServices\Account;

use Illuminate\Support\ServiceProvider;

/**
 * This is use for connect with laravel.
 * load the resources in application booting.
 * 
 */
class AccountServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/Database/Migrations');
    }

    public function register()
    {

    }
}