<?php

use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\LoveController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScanFoodController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth', 'admin')->prefix('admin')->group(function () {
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
        Route::get('/scan-food', 'index')->name('scan_food.index');
        Route::get('/scan-food/delete/{scan_food}', 'destroy')->name('scan_food.destroy');
    });

    Route::controller(LoveController::class)->group(function () {
        Route::get('/love', 'index')->name('love.index');
        Route::get('/love/delete/{love}', 'destroy')->name('love.destroy');
    });

    Route::controller(BookmarkController::class)->group(function () {
        Route::get('/bookmark', 'index')->name('bookmark.index');
        Route::get('/bookmark/delete/{bookmark}', 'destroy')->name('bookmark.destroy');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/user', 'index')->name('user.index');
        Route::get('/user/edit/{user}', 'change')->name('user.change');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
