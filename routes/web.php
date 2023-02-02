<?php

use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;
use Stripe\Stripe;

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

Route::post('make/payment',[StripeController::class,'payment'])->name('stripe.payment');
Route::get('/',[StripeController::class,'index'])->name('coffee');
Route::get('/success',[StripeController::class,'success'])->name('success');
