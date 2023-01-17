<?php

use App\Http\Controllers\BokinganSayaController;
use App\Http\Controllers\CaraBookingUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\LapanganUserController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PembookinganController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SetelanController;
use App\Http\Controllers\TentangKamiUserController; 
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

Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('index');
});
 

Route::resource('home', HomeController::class)->middleware(['auth']);
Route::resource('reset', PasswordController::class)->middleware(['auth', 'verified']);

Route::group(['middleware' => ['role:user', 'verified']], function () {
    Route::resource('lapangan', LapanganUserController::class);
    Route::resource('cara-booking', CaraBookingUserController::class);
    Route::resource('tentang-kami', TentangKamiUserController::class);
    // Route::resource('profil', ProfilController::class);
    Route::resource('bookingan-saya', BokinganSayaController::class);
    Route::resource('komentar', KomentarController::class);
});

Route::group(['middleware' => ['role:admin', 'verified']], function () {
    Route::resource('pembookingan', PembookinganController::class);
    Route::resource('pengguna', PenggunaController::class);
    Route::resource('setelan', SetelanController::class);
});