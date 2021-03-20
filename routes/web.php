<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\frontController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\crudController;
use App\Mail\NotificationSystem;
use Illuminate\Support\Facades\Mail;
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

Route::get('article/{slug}','frontController@article');
Route::get('category/{slug}','frontController@category')->name('singleCat');

Route::get('category', [frontController::class,'category'])->name('category');

Route::get('single', [frontController::class,'single'])->name('single');

Route::get('dashboard', [adminController::class,'index'])->name('dashboard');

Route::get('viewCategory', [adminController::class,'viewCategory'])->name('viewCategory');

Route::post('addCategory', [categoryController::class,'insertData'])->name('addCategory');


Route::get('editCategory/{id}', [adminController::class,'editCategory'])->name('editCategory');

Route::post('updateCategory/{id}', [CrudController::class,'updateData'])->name('updateCategory');

Route::post('multipleDelete', [adminController::class,'multipleDelete'])->name('multipleDelete');

//sections

Route::get('section/{slug}','frontController@section')->name('singleSection');

Route::get('viewSection', [adminController::class,'viewSection'])->name('viewSection');

Route::post('addSection', [CrudController::class,'insertData'])->name('addSection');

Route::get('editSection/{id}', [adminController::class,'editSection'])->name('editSection');

Route::post('updateSection/{id}', [CrudController::class,'updateData'])->name('updateSection');

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
Route::get('/users','adminController@getUsers')->name('users');
Route::get('/privacy',function(){
    return view('frontend.Privacy');
});


//advertisement

Route::get('add-adv', [adminController::class,'addAdv'])->name('addAdv');
Route::post('addadv', [crudController::class,'insertData']);
Route::get('all-advs', [adminController::class,'allAdv'])->name('allAdv');
Route::get('editadv/{id}', [adminController::class,'editAdv'])->name('editAdv');
Route::post('updateadv/{id}', [crudController::class,'updateData'])->name('updateAdv');
Route::get('search-content',[frontController::class,'searchContent'])->name('search-content');


//subscribe

Route::get('/subscribers',[adminController::class,'getSubscribers'])->name('subscribers');
Route::post('subscribe', [crudController::class,'subscribe'])->name('subscribe');

//auth

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('logout',function(){
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::get('/register',function(){
    if(DB::table('users')->count() <= 0){
        return view('auth.register');
    }
   
    return redirect('/login');
})->name('register');

Route::get('register-admin',[adminController::class,'addAdmin'])->name('registerAdmin');
Route::post('addadmin', [crudController::class,'addAdmin'])->name('addAdmin');