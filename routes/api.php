<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\Auth\AuthenticateSanctum;
use App\Http\Controllers\Api\Auth\RegisteredUserController;
use App\Http\Controllers\Api\BookmarkApiController;
use App\Http\Controllers\Api\FoodApiController;
use App\Http\Controllers\Api\LoveApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('/v1')->group(function () {
    Route::prefix('/auth')->group(function () {
        Route::post('/register', [RegisteredUserController::class, 'store']);
        Route::post('/login', [AuthenticateSanctum::class, 'store']);
        Route::get('/logout', [AuthenticateSanctum::class, 'logout']);
        Route::post('/status', [AuthenticateSanctum::class, 'status'])->middleware('auth:sanctum');
    });

    Route::controller(FoodApiController::class)->group(function () {
        Route::get('/food', 'index');
        Route::post('/food', 'food_search');
        Route::post('/food/scan', 'food_scan')->middleware('auth:sanctum');
        Route::get('/food/{food_slug}', 'food_slug')->middleware('auth:sanctum');
        Route::post('/food/special', 'food_special');
    });

    Route::middleware('auth:sanctum')->controller(BookmarkApiController::class)->group(function () {
        Route::get('/bookmark', 'index');
        Route::post('/bookmark', 'store');
        Route::post('/bookmark/{bookmark}', 'destroy');
    });

    Route::middleware('auth:sanctum')->controller(LoveApiController::class)->group(function () {
        Route::get('/loves', 'index');
        Route::post('/love', 'store');
        Route::post('/love/{love}', 'destroy');
    });
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
