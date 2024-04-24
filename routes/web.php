<?php

use App\Http\Controllers\DistributorController;
use App\Http\Controllers\KasirController;
use App\Models\Distributor;
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
    return view('pages.dashboard');
})->middleware('auth');

Route::get('icons', function () {
    return view('icons');
});

Route::get('login',[KasirController::class,'login'])->name('login');
Route::post('login',[KasirController::class,'proses']);

// Kasir
Route::get('dashboard/kasir',[KasirController::class,'index']);
Route::get('dashboard/kasir/tambah',[KasirController::class,'tambah']);
Route::post('dashboard/kasir/tambah',[KasirController::class,'proses_tambah']);
Route::get('dashboard/kasir/edit/{id}',[KasirController::class,'edit']);
Route::post('dashboard/kasir/edit/{id}',[KasirController::class,'proses_edit']);
Route::get('dashboard/kasir/hapus/{id}',[KasirController::class,'hapus']);
// Kasir //

// Distributor
Route::get('dashboard/distributor',[DistributorController::class,'index']);
Route::get('dashboard/distributor/tambah',[DistributorController::class,'tambah']);
Route::post('dashboard/distributor/tambah',[DistributorController::class,'proses_tambah']);
Route::get('dashboard/distributor/edit/{id}',[DistributorController::class,'edit']);
Route::post('dashboard/distributor/edit/{id}',[DistributorController::class,'proses_edit']);
Route::get('dashboard/distributor/hapus/{id}',[DistributorController::class,'hapus']);
// Distributor //