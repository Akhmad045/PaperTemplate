<?php

use App\Http\Controllers\KasirController;
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

Route::get('dashboard/kasir',[KasirController::class,'index']);
Route::get('dashboard/kasir/tambah',[KasirController::class,'tambah']);
Route::post('dashboard/kasir/tambah',[KasirController::class,'proses_tambah']);