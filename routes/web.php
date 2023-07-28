<?php

use App\Http\Controllers\ApiAppController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontendController;
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
Route::get('/', [FrontendController::class,'home']);
Route::get('/logout', [HomeController::class, 'logout']);

////////////////// //////////////////////Api ///////////////////////////////////////////
Route::get('get-Country', [ApiAppController::class, 'getCountry']);
Route::get('get-states', [ApiAppController::class, 'getState']);
Route::get('get-cities', [ApiAppController::class, 'getCity']);
// /////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////BLOGS////////////////////////////////////////////
Route::get('blog',[BlogController::class,'blog']);
Route::get('blogMaster',[BlogController::class,'blogmaster']);
Route::get('blog-Add',[BlogController::class,'blogAdd']);
Route::post('blogStore',[BlogController::class,'blogStore']);
Route::any('read-more/{id}',[BlogController::class,'readMoreBlogs']);
Route::post('addComment/{id}',[BlogController::class,'addComment']);
Route::get('commentMaster',[BlogController::class,'commentMaster']);
Route::any('comment/approve/{id}',[BlogController::class,'commentApprove']);
Route::any('comment/decline/{id}',[BlogController::class,'commentDecline']);
Route::any('comment/delete/{id}',[BlogController::class,'commentDelete']);
/////////////////////////////////////////BLOGS///////////////////////////////////////////