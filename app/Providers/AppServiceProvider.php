<?php

namespace App\Providers;


use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Blog;


class AppServiceProvider extends ServiceProvider

{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('footer_blog', Blog::orderby('created_at', 'desc')->limit(3)->get());
        View::share('footer_category', Category::all());
    }
}
