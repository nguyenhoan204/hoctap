<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductControoller;

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
    echo 'trang chủ';
});

Route::get('test', function () {
    echo "123";
});

Route::get('list-product',[ProductControoller::class,'showProduct']);

//slug
Route::get('get-product/{id}/{name?}',[ProductControoller::class,'getProduct']);

//param

Route::get('update-product',[ProductControoller::class,'updateProduct']);
