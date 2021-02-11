<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    \App\Http\Controllers\MainController::class, 'index'
])->name('index');



Route::get('/about',[
    \App\Http\Controllers\MainController::class, 'about'
])->name('about');

Route::post('/about',[
    \App\Http\Controllers\MainController::class, 'about_send_message'
]);

Route::post('/contact',[
    \App\Http\Controllers\MainController::class, 'contact_send_message'
]);

Route::post('/',[
    \App\Http\Controllers\MainController::class, 'index_subscribe'
]);//распространяется на все страницы?


Route::get('/store',[
    \App\Http\Controllers\MainController::class, 'store'
])->name('store');
Route::get('/store?catId={id}',[
    \App\Http\Controllers\MainController::class, 'store'
])->name('store_category');

Route::get('/news',[
    \App\Http\Controllers\MainController::class, 'news'
])->name('news');
Route::post('/news/{news:id}',[
    \App\Http\Controllers\MainController::class, 'blog_comment'
]);


Route::get('/faq',[
    \App\Http\Controllers\MainController::class, 'faq'
])->name('faq');

Route::get('/contact',[
    \App\Http\Controllers\MainController::class, 'contact'
])->name('contact');

Route::get('/news/{blog:id}', [
    \App\Http\Controllers\MainController::class, 'blog_details'
])->name('news.blog_details');

Route::post('/news/{blog:id}', [
    \App\Http\Controllers\MainController::class, 'blog_comment'
])->name('news.blog_comment');

Route::get('/store/{product:id}', [
    \App\Http\Controllers\MainController::class, 'product_details'
])->name('store.product_details');

Route::post('/store/{product:id}', [
  \App\Http\Controllers\MainController::class ,'product_review'
])->name('store.product_review');


Route::get('/search', [
    \App\Http\Controllers\MainController::class, 'search'
])->name('search');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
