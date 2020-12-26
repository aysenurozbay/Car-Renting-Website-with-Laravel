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



//HOME
Route::get('/', function () {
    return view('layouts.home');
});

//ADMIN
Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class,'index'])->name('adminhome')->middleware('auth');

Route::get('/admin/login', [\App\Http\Controllers\Admin\HomeController::class,'login'])->name('adminlogin');
//to check the login request, create a new url
Route::post('/admin/logincheck', [\App\Http\Controllers\Admin\HomeController::class,'admin_logincheck'])->name('admin_logincheck');

Route::get('admin/logout', [\App\Http\Controllers\Admin\HomeController::class, 'logout'])-> name('admin_logout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');












