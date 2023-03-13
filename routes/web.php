<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;

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

Route::get('/',[CustomerController::class, 'index'])->middleware('auth');
Route::get('/login',[UserController::class, 'login'])->name('login')->middleware('guest');
Route::get( '/user/{id}',[UserController::class, 'show']);
Route::get('/customers',[CustomerController::class, 'index']);

Route::get('/register',[UserController::class, 'register']);
Route::post('/login/process', [UserController::class, 'process']);
Route::post('/store', [UserController::class, 'store']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/delete/{id}', [CustomerController::class, 'delete']);



