<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login",[LoginController::class,'login'])->name('login');
Route::get("login/photo",[LoginController::class,'pick']);
Route::post("/login",[LoginController::class,'checklogin']);
Route::get("/logout",[LoginController::class,'logout'])->name('logout');

Route::get("/registration",[RegisterController::class,'index'])->name('registration');
Route::get("registration/photo",[RegisterController::class,'pick']);
Route::post("/registration",[RegisterController::class,'create']);
Route::get("registration/Username/{q}",[RegisterController::class,'checkUsername']);
Route::get("registration/Email/{q}",[RegisterController::class,'checkEmail']);

Route::get("/home",[HomeController::class,'index'])->name('home');
Route::get("home/photo",[HomeController::class,'pick']);

Route::get("/profile",[HomeController::class,'check'])->name('profile');
Route::get("profile/photo",[HomeController::class,'pick']);
Route::get("profile/user",[HomeController::class,'user']);
Route::post("profile/upload",[HomeController::class,'upload']);
Route::post("profile/reset",[HomeController::class,'reset']);
Route::get("profile/Password/{q}",[HomeController::class,'checkPass']);

Route::get("/menu",[MenuController::class,'index'])->name('menu');
Route::get("menu/photo",[MenuController::class,'pick']);
Route::get("menu/header",[MenuController::class,'header']);
Route::get("menu/showMenu/{q}",[MenuController::class,'showMenu']);
Route::post("menu/add",[MenuController::class,'addItem']);

Route::get("/cart",[CartController::class,'index'])->name('cart');
Route::get("cart/photo",[CartController::class,'pick']);
Route::get("cart/item",[CartController::class,'itemCart']);
Route::post("cart/update",[CartController::class,'updateItem']);
Route::get("cart/delete/{q}",[CartController::class,'delete']);
Route::get("cart/deleteAll",[CartController::class,'deleteAll']);

Route::get("/checkout",[CheckoutController::class,'index'])->name('checkout');
Route::get("checkout/photo",[CheckoutController::class,'pick']);
Route::get("checkout/item",[CheckoutController::class,'itemCart']);
Route::post("/checkout",[CheckoutController::class,'addCheck']);

Route::get("/contact",[ContactController::class,'index'])->name('contact');
Route::get("contact/photo",[ContactController::class,'pick']);
Route::post("contact/request",[ContactController::class,'addRequest']);