<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AlumniController;
use App\Http\Controllers\PengajuanController;
use Illuminate\Support\Facades\Route;

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



Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class,'auth'])->name('auth');
Route::get('register', [UserController::class, 'register'])->name('register')->name('register');
Route::post('register/create', [UserController::class, 'create']);
Route::post('logout', [UserController::class, 'logout']);

Route::middleware('auth')->group(function(){
    Route::get('admin', function () {
    return view('bkk.admin');
    });
    
    Route::get('admin/post', [PostController::class, 'tampil']);
    Route::get('admin/pengajuan', [PengajuanController::class, 'show']);
    Route::get('admin/post/edit/{id_post}', [PostController::class, 'edit']);
    Route::post('admin/post/update/{id_post}', [PostController::class, 'update']);
    Route::get('admin/pengajuan/edit/{id_pengajuan}', [PengajuanController::class, 'edit']);
    Route::post('admin/pengajuan/update/{id_pengajuan}', [PengajuanController::class, 'update']);

});


Route::get('/', [HomeController::class, 'show']);



Route::get('post', [PostController::class, 'show']);
Route::get('post/add', [PostController::class, 'add']);
Route::post('post/create', [PostController::class, 'create']);
Route::get('post/detail/{id_post}', [PostController::class, 'detail']);

Route::get('pengajuan', [PengajuanController::class, 'add']);
Route::post('pengajuan/create', [PengajuanController::class, 'create']);

// Route::get('loginalumni', [AlumniController::class, 'login']);
// Route::post('loginalumni', [AlumniController::class, 'auth'])->name('authh');
// Route::get('registeralumni', [AlumniController::class, 'register']);
// Route::post('registerr/create', [AlumniController::class, 'create']);

Route::get('alumni', function(){
    return view('alumni.dashboard');
});



