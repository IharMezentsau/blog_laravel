<?php

    namespace App\Repositories;

    use Illuminate\Mail\Message;
    use Illuminate\Support\ServiceProvider;

    class UserServiceProvide extends ServiceProvider

    {
        //use EloquentTentacle;

        public function boot()
        {

        }

        public function register()
        {
            $this->app->bind('App\Repositories\UserInterface', 'App\Repositories\UserRepository');
        }

    }