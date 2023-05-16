<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HoSoGiamDinhController;
use App\Http\Controllers\TaiKhoanController;
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

Route::get('/', [HoSoGiamDinhController::class, 'index']);
Route::post('ho-so-giam-dinh/files',[HoSoGiamDinhController::class, 'WordCreate'])->name('WordCreate');
Route::put('ho-so-giam-dinh/files',[HoSoGiamDinhController::class, 'WordCreate'])->name('WordCreate');
Route::resource('ho-so-giam-dinh', HoSoGiamDinhController::class);
Route::resource('thong-tin-tai-khoan', TaiKhoanController::class);