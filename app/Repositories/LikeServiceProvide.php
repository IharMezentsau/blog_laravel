<?php
    namespace App\Repositories;

    use Illuminate\Support\ServiceProvider;
    use Illuminate\Database\Eloquent\Relations\Relation;

    class LikeServiceProvide extends ServiceProvider

    {
        public function boot()
        {

        }

        public function register()
        {
            $this->app->bind('App\Repositories\LikeInterface', 'App\Repositories\LikeRepository');
        }

    }