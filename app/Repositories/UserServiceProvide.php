<?php

    namespace App\Repositories;

    use Illuminate\Mail\Message;
    use Illuminate\Support\ServiceProvider;
    //use Greabock\Tentacles\EloquentTentacle;

    class UserServiceProvide extends ServiceProvider

    {
        //use EloquentTentacle;

        public function boot()
        {
            /*Message::addExternalMethod('t_user', function()
            {
                return $this->hasOne(Message::class);
            });


            Message::addExternalMethod('getFullnameAttribute', function()
            {
                return $this->name . ' ' . $this->familyname;
            });*/
        }

        public function register()
        {
            $this->app->bind('App\Repositories\UserInterface', 'App\Repositories\UserRepository');
        }

    }