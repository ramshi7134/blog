<?php

namespace Webpacks\Blog\Providers;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../views', 'blog');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        // Load package translations
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'blog');

        // Publish config
        $this->publishes([
            __DIR__ . '/../config/blog.php' => config_path('blog.php'),
        ], 'config');
    }

    public function register()
    {
        // Merge configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/blog.php', 'blog');
    }
}
