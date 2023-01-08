<?php

use App\Http\Controllers\BokinganSayaController;
use App\Http\Controllers\CaraBookingUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LapanganUserController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TentangKamiUserController;
use App\Http\Controllers\TestingController;
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

Route::get('forgot-password', function () {
    return view('forgot-password');
});

Auth::routes();

Route::get('/', function () {
    return view('index');
});
 

Route::resource('home', HomeController::class)->middleware('auth');

Route::group(['middleware' => ['role:user']], function () {
    Route::resource('lapangan', LapanganUserController::class);
    Route::resource('cara-booking', CaraBookingUserController::class);
    Route::resource('tentang-kami', TentangKamiUserController::class);
    Route::resource('profil', ProfilController::class);
    Route::resource('bookingan-saya', BokinganSayaController::class);
});

Route::group(['middleware' => ['role:admin']], function () {
});