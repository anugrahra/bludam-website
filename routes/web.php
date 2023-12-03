<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pesanController;
use App\Http\Controllers\pengaduanController;

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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/formpengaduan', function () {
    return view('pengaduan');
});

Route::get('/under', function () {
    return view('under');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::resource('pesan', pesanController::class);

Route::resource('pengaduan', pengaduanController::class);