<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\Auth\AuthenticateSanctum;
use App\Http\Controllers\Api\Auth\RegisteredUserController;
use App\Http\Controllers\Api\FoodApiController;
use App\Http\Controllers\GeneralController;
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
    });

    Route::controller(FoodApiController::class)->group(function () {
        Route::get('/food', 'food');
        Route::post('/food', 'food_search');
        Route::get('/food/{food_slug}', 'food_slug');
        Route::get('/regency', 'regency');
        Route::get('/regency/{regency}', 'regency_id');
    });
});

Route::post('/fetch-regency', [GeneralController::class, 'fetch_regency']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
