<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;


Route::get('/', [Controller::class, 'dashboard']);

Route::get('/login', [Controller::class, 'loginpage']);
Route::get('/register', [Controller::class, 'registpage']);

Route::get('/stokmakanan', [Controller::class, 'stokmakanan']);
Route::get('/tambahstokmakanan', [Controller::class, 'tambahstokmakanan']);
Route::get('/editstokmakanan/{id}', [Controller::class, 'editstokmakanan']);

Route::get('/stokbahanmakanan', [Controller::class, 'stokbahanmakanan']);
Route::get('/tambahstokbahanmakanan', [Controller::class, 'tambahstokbahanmakanan']);
Route::get('/editstokbahanmakanan/{id}', [Controller::class, 'editstokbahanmakanan']);

Route::get('/daftarpegawai', [Controller::class, 'daftarpegawai']);
Route::get('/tambahpegawai', [Controller::class, 'tambahpegawai']);
Route::get('/editpegawai/{id}', [Controller::class, 'editpegawai']);

Route::get('/absensipegawai', [Controller::class, 'absensipegawai']);

Route::get('/gajipegawai', [Controller::class, 'gajipegawai']);
Route::get('/tambahgajipegawai', [Controller::class, 'tambahgajipegawai']);
Route::get('/editgajipegawai/{id}', [Controller::class, 'editgajipegawai']);

Route::get('/cutipegawai', [Controller::class, 'cutipegawai']);
Route::get('/tambahcutipegawai', [Controller::class, 'tambahcutipegawai']);
Route::get('/detailcutipegawai/{id}', [Controller::class, 'detailcutipegawai']);

Route::get('/laporanpendapatan', [Controller::class, 'laporanpendapatan']);
Route::get('/tagihan', [Controller::class, 'tagihan']);
Route::get('/invoices', [Controller::class, 'invoices']);

Route::post('/login', [Controller::class, 'login']);
Route::post('/register', [Controller::class, 'register']);
Route::post('/logout', [Controller::class, 'logout']);

Route::post('/tambahstokmakananpost', [Controller::class, 'tambahstokmakananpost']);
Route::post('/hapusstokmakananpost/{id}', [Controller::class, 'hapusstokmakananpost']);
Route::post('/editstokmakananpost/{id}', [Controller::class, 'editstokmakananpost']);

Route::post('/tambahstokbahanmakananpost', [Controller::class, 'tambahstokbahanmakananpost']);
Route::post('/hapusstokbahanmakananpost/{id}', [Controller::class, 'hapusstokbahanmakananpost']);
Route::post('/editstokbahanmakananpost/{id}', [Controller::class, 'editstokbahanmakananpost']);

Route::post('/tambahpegawaipost', [Controller::class, 'tambahpegawaipost']);
Route::post('/hapuspegawaipost/{id}', [Controller::class, 'hapuspegawaipost']);
Route::post('/editpegawaipost/{id}', [Controller::class, 'editpegawaipost']);

Route::post('/tambahgajipegawaipost', [Controller::class, 'tambahgajipegawaipost']);
Route::post('/hapusgajipegawaipost/{id}', [Controller::class, 'hapusgajipegawaipost']);
Route::post('/editgajipegawaipost/{id}', [Controller::class, 'editgajipegawaipost']);

Route::post('/tambahcutipegawaipost', [Controller::class, 'tambahcutipegawaipost']);
Route::post('/editcutipegawaipost/{id}', [Controller::class, 'tambahcutipegawaipost']);

