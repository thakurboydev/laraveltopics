<?php

namespace App\Providers;

use App\Http\Controllers\UserController;
use Illuminate\Support\ServiceProvider;
use Nette\Utils\Random;

class UserService extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserController::class ,function(){
            return new UserController(rand(0,100000));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

}
