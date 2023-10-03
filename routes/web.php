<?php

use App\Http\Controllers\MasterObatController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [Index::class, 'view_index'])->name('index');

//Obat
//Master Obat
Route::get('/master_obat', [MasterObatController::class, 'view_obat'])->name('view_m_obat');
//Master Jenis Obat
Route::get('/master_jenis_obat', [MasterObatController::class, 'view_jenis_obat'])->name('view_m_jenis_obat');
Route::get('/master_jenis_obat/add', [MasterObatController::class, 'view_add_jenis_obat'])->name('view_add_m_jenis_obat');
Route::post('master_jenis_obat/add', [MasterObatController::class, 'add_jenis_obat'])->name('add_m_jenis_obat');