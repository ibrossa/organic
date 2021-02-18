<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use Spatie\Sitemap\SitemapGenerator;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    MainController::class, 'index'
])->name('index');


Route::get('/about', [
    MainController::class, 'about'
])->name('about');

Route::post('/about', [
    MainController::class, 'about_send_message'
]);

Route::post('/contact', [
    MainController::class, 'contact_send_message'
])->name('contact_send_message');

Route::post('/subscribe', [
    MainController::class, 'subscribe'
])->name('subscribe');//распространяется на все страницы?

Route::get('/faq', [
    MainController::class, 'faq'
])->name('faq');

Route::get('/contact-us', [
    MainController::class, 'contact'
])->name('contact');

Route::get('/search', [
    MainController::class, 'search'
])->name('search');

Route::get('/cart', [
    CartController::class, 'cart'
])->name('cart');

Route::post('/add_to_card', [
    CartController::class, 'addToCart'
])->name('addToCart');

Route::get('/news', [
    BlogController::class, 'news'
])->name('news');

Route::post('/news/{news:id}', [
    BlogController::class, 'blog_comment'
])->name('blog_comment');

Route::get('/news/{blog:id}', [
    BlogController::class, 'blog_details'
])->name('news.blog_details');

Route::post('/news/{blog:id}', [
    BlogController::class, 'blog_comment'
])->name('news.blog_comment');

Route::get('/store', [
    ProductController::class, 'store'
])->name('store');

Route::get('/store?catId={id}', [
    ProductController::class, 'store'
])->name('store_category');

Route::get('/store/{product:id}', [
    ProductController::class, 'product_details'
])->name('store.product_details');

Route::post('/store/{product:id}', [
    ProductController::class, 'product_review'
])->name('store.product_review');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

