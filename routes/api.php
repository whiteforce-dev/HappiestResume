<?php

use App\Http\Controllers\ApiAppController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('get-country', [ApiAppController::class,'getCountry']);
Route::get('get-states/{country_id}', [ApiAppController::class, 'getState']);
Route::get('get-cities/{state_id}', [ApiAppController::class, 'getCity']);
Route::post('downloadpdf', [ApiAppController::class,'downloadPDF']);
Route::post('save-data', [ApiAppController::class,'saveData']);
Route::post('save-user-data', [ApiAppController::class,'saveUserData']);
Route::post('login-user-detail', [ApiAppController::class, 'loginUserDetails']);
Route::post('store-image', [ApiAppController::class, 'saveUserImage']);