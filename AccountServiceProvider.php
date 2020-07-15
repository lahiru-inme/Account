<?php

namespace DigitalServices\Account;

use Illuminate\Support\ServiceProvider;

class AccountServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');
    }

    public function register()
    {

    }
}