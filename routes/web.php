<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\KategoriController;

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


// Route::get('/admin', function () {
//     return view('admin');
// });

Route::get('/penerbit', [PenerbitController::class, 'index'])->name('penerbit.index');
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');


Route::get('/admin/create', [AdminController::class, 'create'])->name('create');
Route::post('/admin/store', [AdminController::class, 'store'])->name('store');
