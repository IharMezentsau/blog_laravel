<?php

    namespace App\Repositories;

    use App\Message;
    use Illuminate\Support\ServiceProvider;
    use Illuminate\Database\Eloquent\Relations\Relation;

    class MessageServiceProvide extends ServiceProvider
    {

        public function boot(){

            /*Relation::morphMap([
                'answer' => App\Answer::class,
                'like' => App\Like::class,
                'user' => App\User::class,
            ]);*/



        }

        public function register(){
            $this->app->bind('App\Repository\MessageInterface', 'App\Repository\MessageRepository');
        }

    }