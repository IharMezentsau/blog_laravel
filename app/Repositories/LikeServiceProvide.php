<?php
    namespace App\Repositories;

    use Illuminate\Support\ServiceProvider;
    use Illuminate\Database\Eloquent\Relations\Relation;

    class LikeServiceProvide extends ServiceProvider

    {
        public function boot()
        {

            Relation::morphMap([
                'message' => App\Message::class,
                'user' => App\User::class,
            ]);
        }

        public function register()
        {
            $this->app->bind('App\Repositories\LikeInterface', 'App\Repositories\LikeRepository');
        }

    }