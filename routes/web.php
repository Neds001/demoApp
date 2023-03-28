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

//Route::get( '/user/{id}',[UserController::class, 'show']);

Route::get('/register',[UserController::class, 'register']);

Route::post('/store', [UserController::class, 'store']);

Route::get('/login',[UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/login/process', [UserController::class, 'process']);

Route::get('/logout', [UserController::class, 'logout']);

//Route::get('/customers',[CustomerController::class, 'index']);

Route::get('/delete/{id}', [UserController::class, 'delete']);

////////

Route::get('/addCustomer',[CustomerController::class, 'addCustomer'])->middleware('auth');
Route::post('/saveCustomer', [CustomerController::class, 'saveCustomer']);
Route::get('/edit/{id}', [CustomerController::class, 'edit'])->middleware('auth');
Route::post('updateCustomer', [CustomerController::class, 'updateCustomer'])->middleware('auth');


