<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/catalog', [LandingController::class,'catalog'])->name('catalog');

Route::get('/login', [LoginController::class, 'login_form'])->name('login_form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'register_form'])->name('register_form');
Route::post('/register_user', [RegisterController::class, 'register'])->name('register');

Route::get('/dashboard', [CatalogController::class,'menu'])->name('menu')->middleware('auth');

Route::resource('dashboard/catalog', CatalogController::class )->middleware('auth');

Route::get('/keranjang', [KeranjangController::class, 'barang'])->name('keranjang')->middleware('CheckAdmin');
Route::get('/checkout', [KeranjangController::class, 'checkout'])->name('checkout')->middleware('CheckAdmin');