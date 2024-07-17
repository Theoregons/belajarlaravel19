<?php

use App\Http\Controllers\SiswaController;
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
    return view('welcome');
});

Route::get('halo', function () {
    return 'ini laravel saya';
});

Route::get('penjumlahan/{nilai}', function ($nilai) {
    return 'hasil : ' . $nilai;
});

Route::get('users/{id}', function () {});
Route::post('users/{id}', function () {});
Route::put('users/{id}', function () {});
Route::delete('users/{id}', function () {});

Route::get('coba', function () {
    return view('coba');
});

Route::get('template', function () {
    return view('template');
});

Route::get('tabel', function () {
    $data = ['meja', 'kursi', 'pintu', 'pensil', 'pulpen', 'lampu'];
    // return view('table', ['data' => $data, 'barang' => $barang]);
    return view('table', compact('data'));
});

Route::get('template2', function () {
    return view('home');
});

// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('tambahsiswa', [SiswaController::class, 'create']);
// Route::get('tambahsiswa', [SiswaController::class, 'show']);

Route::resource('siswa', SiswaController::class);
