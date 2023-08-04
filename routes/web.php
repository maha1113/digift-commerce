<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Site3Controller;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;
Use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix(LaravelLocalization::setLocale())-> name('site3.')->group(function(){
Route::get('/',[Site3Controller::class,'index'])->name('index');
Route::get('/about',[Site3Controller::class,'about'])->name('about');
Route::get('/contact',[Site3Controller::class,'contact'])->name('contact');
Route::get('/furniture',[Site3Controller::class,'furniture'])->name('furniture');
Route::get('/shop',[Site3Controller::class,'shop'])->name('shop');

});

Route::prefix(LaravelLocalization::setLocale() .'/admin')->name('admin.')->group(function(){
Route::get('/',[AdminController::class,'index'])->name('index');
Route::resource('products', ProductController::class);
Route::resource('users',UserController::class);
Route::resource('stores',StoreController::class);
Route::resource('orders',OrderController::class);
Route::resource('wallet',WalletController::class);
});
