<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AnswerServiceProvide extends ServiceProvider
{

    public function boot(){

        Relation::morphMap([
            'message' => App\Message::class,
        ]);

    }

    public function register(){
        $this->app->bind('App\Repository\AnswerInterface', 'App\Repository\AnswerRepository');
    }

}