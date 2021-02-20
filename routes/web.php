<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Funds\CategoryController;
use App\Http\Controllers\Dashboard\Funds\SectorController;
use App\Http\Controllers\Dashboard\Funds\InvestorController;
use App\Http\Controllers\Dashboard\Funds\ChannelController;

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
    return view('website.main');
});

Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [\App\Http\Controllers\UserController::class, 'register']);
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [\App\Http\Controllers\UserController::class, 'login']);
Route::get('/password-reset', function () {
    return view('reset');
});

Route::get('/dashboard', function () {
    return view('dashboard.main');
});

Route::prefix('dashboard')->group(function () {
    //Funds Routes
    Route::prefix('funds')->group(function () {
        // For view only
        Route::get('investor-setup', [InvestorController::class,'index'])->name('investor');
        Route::get('category-setup', [CategoryController::class,'index'])->name('category');
        Route::get('channels-setup', [ChannelController::class,'index'])->name('channel');
        Route::get('sector-setup', [SectorController::class,'index'])->name('sector');
        // For add only
        Route::post('investor-setup', [InvestorController::class,'add'])->name('investor.add');
        Route::post('category-setup', [CategoryController::class,'add'])->name('category.add');
        Route::post('channels-setup', [ChannelController::class,'add'])->name('channel.add');
        Route::post('sector-setup', [SectorController::class,'add'])->name('sector.add');
        //For edit and update only
        Route::get('investor-setup/{id}', [InvestorController::class,'edit'])->name('investor.edit');
        Route::get('category-setup/{id}', [CategoryController::class,'edit'])->name('category.edit');
        Route::get('channels-setup/{id}', [ChannelController::class,'edit'])->name('channel.edit');
        Route::get('sector-setup/{id}', [SectorController::class,'edit'])->name('sector.edit');
        Route::put('sector-setup', [SectorController::class,'update'])->name('sector.update');
        Route::put('channels-setup', [ChannelController::class,'update'])->name('channel.update');
        Route::put('category-setup', [CategoryController::class,'update'])->name('category.update');
        Route::put('investor-setup', [CategoryController::class,'update'])->name('investor.update');

    });  
});

Route::fallback(function () {
    return "<h1 style='height: 100%; display: flex; justify-content: center; align-items: center;'>404 NOT FOUND!</h1>";
});