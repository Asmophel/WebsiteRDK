<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\UploadImagesController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\AmalYaumiController;


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



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


  
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['role:SC']], function () {
    Route::resource('users', UserController::class);
});

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::get('/amal/addamalyaumi', [AmalYaumiController::class, 'addamalyaumi'])->name('addamalyaumi');
    Route::post('/amal/addamalyaumi', [AmalYaumiController::class, 'postamalyaumi'])->name('storeamalyaumi');
    Route::get('/posts/daftarkegiatan/{id}', [PostController::class, 'daftarkegiatan'])->name('daftarkegiatan');
    Route::post('/posts/daftarkegiatan/{id}', [PostController::class, 'userkegiatan'])->name('userkegiatan');
    Route::get('/posts/diikuti', [PostController::class, 'diikuti'])->name('diikuti');
    Route::get('/posts/edit', [PostController::class, 'edit'])->name('edit');
    Route::post('/posts/edit/{$id}', [PostController::class, 'update'])->name('update');
    Route::resource('amal', AmalYaumiController::class);
    Route::get('updaterole/{id}',[UserController::class, 'editrole'])->name('editrole');
    //Route::get('editrole/{id}',[UserController::class, 'editrole']);
    Route::put('updaterole/{id}',[UserController::class, 'updaterole'])->name('updaterole');
    //Route::get('useras', [UserController::class, 'index']);
    Route::resource('keuangan', KeuanganController::class);
    Route::resource('posts', PostController::class);
});

Route::resource('donasi', DonasiController::class);
 
Route::get('upload-multiple-image-preview', [UploadImagesController::class, 'index']);
 
Route::post('upload-multiple-image-preview', [UploadImagesController::class, 'store']);

Auth::routes();