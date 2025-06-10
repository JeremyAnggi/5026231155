<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\link;
use App\Http\Controllers\PegawaiController;
// use App\Http\Controllers\Pegawai2Controller;

use App\Http\Controllers\BlogController;
// use Illuminate\Support\Facades\DB;
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

Route::view('/pertemuan1', 'pertemuan1');
Route::view('/pertemuan3', 'pertemuan3');
Route::view('/linktree', 'linktree');
Route::view('/js1', 'js1');
Route::view('/js2', 'js2');
Route::view('/ets', 'ets');
Route::view('/pertemuan2', 'pertemuan2');
Route::view('/frontend', 'frontend');


// Route dosen
Route::get('dosen', [Link::class, 'index']);

// Route pegawai
// Route::get('/pegawai2/{nama}', [Pegawai2Controller::class, 'index']);

// Route formulir
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// Route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);


//route CRUD
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);


Route::post('/pegawai/store', [PegawaiController::class, 'store']);

Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);	


Route::post('/pegawai/update', [PegawaiController::class, 'update']);	

Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);