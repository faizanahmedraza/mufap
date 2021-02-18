<?php

use Illuminate\Support\Facades\App;
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

Route::get('/funds/investor-setup', function () {
    return view('dashboard.funds.investor');
});
Route::get('/funds/category-setup', function () {
    return view('dashboard.funds.category');
});
Route::get('/funds/channels-setup', function () {
    return view('dashboard.funds.channels');
});
Route::get('/funds/sector-setup', function () {
    return view('dashboard.funds.sector');
});