<?php

namespace App\Providers;
use App\Models\Post;
use App\Models\Settings;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $settings = Settings::first();
        \View::share('settings',$settings);

        $posts = Post::first();
        \View::share('posts',$posts);
    }
}
