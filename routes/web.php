<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('sign-up', [App\Http\Controllers\FrontendController::class,'sign_up'])->name('sign-up');
Route::Any('/registration', [App\Http\Controllers\FrontendController::class,'registration']);
Route::Any('forgotpassword', [App\Http\Controllers\FrontendController::class,'forgotpassword']);
Route::Post('updatepassword', [App\Http\Controllers\FrontendController::class,'updatepassword']);
Route::get('/logout', [HomeController::class, 'logout']);
