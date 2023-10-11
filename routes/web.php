<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\MasterBidanController;
use App\Http\Controllers\MasterObatController;
use App\Http\Controllers\MasterLayananController;
use App\Http\Controllers\MasterPasienController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Index;
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
//Login
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
//Regis
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('actionregister', [RegisterController::class, 'actionregister'])->name('actionregister');
//Home / Index
Route::get('/index', [IndexController::class, 'view_index'])->name('index')->middleware('auth');
//Obat
//Master Obat
Route::get('/master_obat', [MasterObatController::class, 'view_obat'])->name('view_m_obat');
//Master Jenis Obat
Route::get('/master_jenis_obat', [MasterObatController::class, 'view_jenis_obat'])->name('view_m_jenis_obat');
Route::get('/master_jenis_obat/add', [MasterObatController::class, 'view_add_jenis_obat'])->name('view_add_m_jenis_obat');
Route::post('/master_jenis_obat/add', [MasterObatController::class, 'add_jenis_obat'])->name('add_m_jenis_obat');
//Bidan
Route::get('/master_bidan', [MasterBidanController::class, 'view'])->name('view_m_bidan');
Route::get('/master_bidan/add', [MasterBidanController::class, 'add'])->name('add_m_bidan');
//Pasien
Route::get('/master_pasien', [MasterPasienController::class, 'view'])->name('view_m_pasien');
//Layanan
//Master Layanan
Route::get('/master_layanan', [MasterLayananController::class, 'view'])->name('view_m_layanan');
//Master Jenis Layanan
Route::get('/master_jenis_layanan', [MasterLayananController::class, 'view_jenis'])->name('view_m_jenis_layanan');