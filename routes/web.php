<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Productcontroller;

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

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::view('/register','register');
Route::view("/login","login");
Route::post("/register",[UserController::class,'register']);
Route::post("/login",[UserController::class,'login']);
Route::get("/",[Productcontroller::class,'index']);
Route::get("detail/{id}",[Productcontroller::class,'detail']);
Route::get("search",[Productcontroller::class,'search']);
Route::post("add_to_cart",[Productcontroller::class,'addToCart']);
Route::get("cartlist",[Productcontroller::class,'cartList']);
Route::get("removecart/{id}",[Productcontroller::class,'removeCart']);
Route::get("ordernow",[Productcontroller::class,'orderNow']);
Route::post("orderplace",[Productcontroller::class,'orderPlace']);
Route::get("myorder",[Productcontroller::class,'myOrder']);





