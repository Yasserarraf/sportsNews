<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\categoryController;
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

Route::get('/', [frontController::class,'index']);

Route::get('category', [frontController::class,'category'])->name('category');

Route::get('single', [frontController::class,'single'])->name('single');

Route::get('dashboard', [adminController::class,'index'])->name('dashboard');

Route::get('viewCategory', [adminController::class,'viewCategory'])->name('viewCategory');

Route::post('addCategory', [categoryController::class,'insertData'])->name('addCategory');
