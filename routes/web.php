<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontendController::class , 'home'])->name('home');

Route::get('/order', [FrontendController::class , 'order'])->name('order');

Route::post('/order/create', [FrontendController::class , 'createOrder'])->name('order.create');

Route::post('/contact/us/create', [FrontendController::class , 'createContact'])->name('contact.create');