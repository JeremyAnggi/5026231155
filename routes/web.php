<?php

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

Route::view('/pertemuan1', 'pertemuan1');
Route::view('/pertemuan3', 'pertemuan3');
Route::view('/linktree', 'linktree');
Route::view('/js1', 'js1');
Route::view('/js2', 'js2');
Route::view('/ets', 'ets');
Route::view('/pertemuan2', 'pertemuan2');
