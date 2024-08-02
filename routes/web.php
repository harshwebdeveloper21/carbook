<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\EmailController;



Route::get('login',[UserController::class,'login']);
Route::post('UserLogin',[UserController::class,'UserLogin']);
Route::post('singin',[UserController::class,'singin']);
Route::get('logout', [UserController::class, 'logout']);


Route::get('/',[UserController::class, 'index']);
Route::get('about',[UserController::class,'about']);
Route::get('services',[UserController::class,'services']);
Route::get('price',[UserController::class,'price']);
Route::get('car',[CarController::class,'car']);
// Route::get('carDetails',[CarController::class,'carDetails']);

Route::get('carDetails/{id}', [CarController::class, 'carDetails'])->name('car.details');
Route::get('bookcar',[CarController::class,'bookcar']);
Route::get('search',[CarController::class, 'search']);
Route::Post('carsearch',[CarController::class,'carsearch']);
Route::Post('payment',[StripeController::class,'processPayment']);




Route::get('sendbasicemail', [EmailController::class, 'basic_email']);
Route::get('sendhtmlemail', [EmailController::class, 'html_email']);


