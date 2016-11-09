<?php

namespace Tavaresevora\Commentable;

use Illuminate\Support\ServiceProvider;

class CommentableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations/');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
