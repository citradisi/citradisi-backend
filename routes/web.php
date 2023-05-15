<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScanFoodController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::controller(GeneralController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard');
    });

    Route::controller(FoodController::class)->group(function () {
        Route::get('/food', 'index')->name('food.index');
        Route::get('/food/create', 'create')->name('food.create');
        Route::post('/food/create', 'store');
        Route::get('/food/edit/{food}', 'edit')->name('food.edit');
        Route::put('/food/edit/{food}', 'update');
        Route::get('/food/delete/{food}', 'destroy')->name('food.destroy');
    });

    Route::controller(ScanFoodController::class)->group(function () {
        Route::get('/scan-food', 'index')->name('scanfood.index');
        Route::get('/scan-food/delete/{food}', 'destroy')->name('scanfood.destroy');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/user', 'index')->name('user.index');
        Route::get('/user/create', 'create')->name('user.create');
        Route::post('/user/create', 'store');
        Route::get('/user/edit/{user}', 'edit')->name('user.edit');
        Route::put('/user/edit/{user}', 'update');
        Route::get('/user/delete/{user}', 'destroy')->name('user.destroy');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
