<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('login');
});

Route::post("login",[UserController::class,'login']);

Route::get('sign_up', function () {
    return view('signup');
});

Route::post("sign_up",[UserController::class,'signUp']);

Route::get("/",[ProductController::class,'index']);

Route::get("/logout",[UserController::class,'deleteSessionData']);

Route::get("details/{id}",[ProductController::class,'details']);

Route::get("search",[ProductController::class,'search']);

Route::post("add_to_cart",[ProductController::class,'addToCart']);

Route::get("cartlist",[ProductController::class,'CartList']);

Route::get("remove_from_cart/{id}",[ProductController::class,'removeFromCart']);

Route::get("ordernow",[ProductController::class,'orderNow']);

Route::post("placeorder",[ProductController::class,'placeOrder']);

Route::get("orderlist",[ProductController::class,'orderList']);
