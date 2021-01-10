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





Route::middleware('auth')->prefix('admin')->group(function (){

    Route::get('/' , [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

    Route::get('/category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_categoryList');

    Route::get('/category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('/category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');

    Route::get('/category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('/category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');

    Route::get('/category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');

    Route::get('/category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');





    Route::prefix('cars')->group(function (){
        Route::get('/' , [App\Http\Controllers\Admin\CarsController::class, 'index'])->name('admin_cars');
        Route::get('create' , [App\Http\Controllers\Admin\CarsController::class, 'create'])->name('admin_cars_add');
        Route::post('store' , [App\Http\Controllers\Admin\CarsController::class, 'store'])->name('admin_cars_store');
        Route::get('edit/{id}' , [App\Http\Controllers\Admin\CarsController::class, 'edit'])->name('admin_cars_edit');
        Route::post('update/{id}' , [App\Http\Controllers\Admin\CarsController::class, 'update'])->name('admin_cars_update');
        Route::get('delete/{id}' , [App\Http\Controllers\Admin\CarsController::class, 'destroy'])->name('admin_cars_delete');
        Route::get('show' , [App\Http\Controllers\Admin\CarsController::class, 'show'])->name('admin_cars_show');


    });

    Route::prefix('image')->group(function (){

        Route::get('create/{car_id}' , [App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{car_id}' , [App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}' , [App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show' , [App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');


    });

//    Formu çağırıyorsak Route::get kullanılır
});




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');












