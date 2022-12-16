<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdTestController;
use App\Http\Controllers\AdController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAdController;



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


    Route::post('/logovanje', [AuthController::class, 'logovanje']);
    Route::get('/ads/{id}', [AdTestController::class, 'show']);
    Route::get('/ads', [AdTestController::class, 'index']);

    Route::resource('ads', AdController::class);
   Route::resource('ads', AdTestController::class);

    Route::resource('users', UserController::class);
    Route::get('users/{id}/ads', [UserAdController::class, 'index'])->name('users.ads.index');
   
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/loging', [AuthController::class, 'loging']);
    Route::post('/login', [AuthController::class, 'login']);