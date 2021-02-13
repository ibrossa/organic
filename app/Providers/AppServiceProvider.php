<?php

namespace App\Providers;


use App\Models\Category;
use http\Env\Request;
use Illuminate\Pagination\Paginator;
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
        View::share('footer_category', Category::active()->get());
        Paginator::useBootstrap();

    }
}
