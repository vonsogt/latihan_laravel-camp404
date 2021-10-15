<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Session 1
Route::get('beranda', [MenuController::class, 'beranda'])->name('beranda');
Route::get('info-kegiatan', [MenuController::class, 'infoKegiatan'])->name('info-kegiatan');
Route::get('data-siswa', [MenuController::class, 'dataSiswa'])->name('data-siswa');

// Session 2
Route::resource('students', StudentController::class)->middleware('can:isAdmin');
Route::resource('students', StudentController::class)->only('show')->middleware('can:isAdminSiswa');

// Session 2 : Project 2
Route::resource('user', UserController::class)->middleware('can:isAdmin');
