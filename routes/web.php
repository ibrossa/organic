<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
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
]);

Route::post('/', [
    MainController::class, 'index_subscribe'
]);//распространяется на все страницы?


Route::get('/store', [
    MainController::class, 'store'
])->name('store');

Route::get('/store?catId={id}', [
    MainController::class, 'store'
])->name('store_category');

Route::get('/news', [
    MainController::class, 'news'
])->name('news');

Route::post('/news/{news:id}', [
    MainController::class, 'blog_comment'
])->name('blog_comment');

Route::get('/faq', [
    MainController::class, 'faq'
])->name('faq');

Route::get('/contact', [
    MainController::class, 'contact'
])->name('contact');

Route::get('/news/{blog:id}', [
    MainController::class, 'blog_details'
])->name('news.blog_details');

Route::post('/news/{blog:id}', [
    MainController::class, 'blog_comment'
])->name('news.blog_comment');

Route::get('/store/{product:id}', [
    MainController::class, 'product_details'
])->name('store.product_details');

Route::post('/store/{product:id}', [
    MainController::class, 'product_review'
])->name('store.product_review');


Route::get('/search', [
    MainController::class, 'search'
])->name('search');

Route::get('/cart', [
    CartController::class, 'cart'
])->name('cart');

Route::post('/add_to_card', [
    CartController::class, 'addToCart'
])->name('addToCart');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
