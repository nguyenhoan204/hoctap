<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get('/test', function () {
    echo '123';
});

Route::get('/list-user',[UserController::class,'showUser']);

Route::get('/list-user/{id}',[UserController::class,'getUser']);

