<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KomoditasController;
use App\Http\Controllers\TahunController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('dashboard.dashboard', [
//         'title' => 'Dashboard',
//         'active' => 'dashboard'
//     ]);
// });

Route::resource('/', DashboardController::class);
Route::resource('/komoditas', KomoditasController::class);
Route::resource('/kecamatan', KecamatanController::class);
Route::resource('/tahun', TahunController::class);
