<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\crudController;
use App\Mail\NotificationSystem;
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

Route::get('/', [frontController::class,'index'])->name('frontend');

Route::get('category', [frontController::class,'category'])->name('category');

Route::get('single', [frontController::class,'single'])->name('single');

Route::get('dashboard', [adminController::class,'index'])->name('dashboard');

Route::get('viewCategory', [adminController::class,'viewCategory'])->name('viewCategory');

Route::post('addCategory', [categoryController::class,'insertData'])->name('addCategory');


Route::get('editCategory/{id}', [adminController::class,'editCategory'])->name('editCategory');

Route::post('updateCategory/{id}', [categoryController::class,'updateCategory'])->name('updateCategory');

Route::post('multipleDelete', [adminController::class,'multipleDelete'])->name('multipleDelete');

//settings

Route::get('getSettings', [adminController::class,'getSettings'])->name('getSettings');

Route::post('addSetting', [crudController::class,'insertData'])->name('addSetting');

Route::post('updateSettings/{id}', [crudController::class,'updateData'])->name('updateSettings');

Route::post('multipledelete','adminController@multipleDelete');

//posts
Route::get('add-post','adminController@addPost');
Route::post('addpost','crudController@insertData');
Route::get('all-posts','adminController@allPosts');
Route::get('editpost/{id}','adminController@editPost');
Route::post('updatepost/{id}','crudController@updateData');


Route::post('updateSettings/{id}', [crudController::class,'updateData'])->name('updateSettings');
Route::get('users','adminController@getUsers')->name('users');



//advertisement



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('logout',[App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

Route::get('add-adv', [adminController::class,'addAdv'])->name('addAdv');
Route::post('addadv', [crudController::class,'insertData']);
Route::get('all-advs', [adminController::class,'allAdv'])->name('allAdv');
Route::get('editadv/{id}', [adminController::class,'editAdv'])->name('editAdv');
Route::post('updateadv/{id}', [crudController::class,'updateAdv'])->name('updateAdv');



//notification system
Route::get('email',function(){
    return new NotificationSystem();
});
