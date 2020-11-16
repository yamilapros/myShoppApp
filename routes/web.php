<?php

use Illuminate\Support\Facades\Auth;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//WelcomeController users
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);
Route::get('/categories/{id}', [App\Http\Controllers\CategoryController::class, 'show']);
//Search
Route::get('/search', [App\Http\Controllers\SearchController::class, 'show']);
//ProductController
Route::get('/products/{id}', [App\Http\Controllers\ProductController::class, 'show']);
//CartDetailController
Route::post('/cart', [App\Http\Controllers\CartDetailController::class, 'store']);
Route::delete('/cart', [App\Http\Controllers\CartDetailController::class, 'destroy']);
//CartController
Route::post('/order', [App\Http\Controllers\CartController::class, 'update']);

//Admin - Product
Route::middleware(['admin'])->group(function(){
    Route::resource('/admin/products', App\Http\Controllers\Admin\ProductController::class);
    Route::resource('/admin/categories', App\Http\Controllers\Admin\CategoryController::class);
    Route::get('/admin/products/{id}/images', [App\Http\Controllers\Admin\ImageController::class, 'index']);
    Route::post('/admin/products/{id}/images', [App\Http\Controllers\Admin\ImageController::class, 'store']);
    Route::delete('/admin/products/{id}/images', [App\Http\Controllers\Admin\ImageController::class, 'destroy']);
    Route::get('/admin/products/{id}/images/featured/{image}', [App\Http\Controllers\Admin\ImageController::class, 'featuredImage']);
});

