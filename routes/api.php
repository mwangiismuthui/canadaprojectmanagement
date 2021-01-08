<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
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
Route::post('/newlogin', [UserAuthController::class, 'userLogin']);
Route::post('/newregister', [UserAuthController::class, 'registerUser']);
Route::post('/forgotpassword', [UserAuthController::class, 'forgot_password']);
Route::post('/tokenconnfrm', [UserAuthController::class, 'token_connfrm']);
Route::post('/changePassword', [UserAuthController::class, 'changePassword']);

