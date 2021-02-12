<?php

use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\ShopcartController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//use App\Http\Controllers\Admin\UserController;

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

Route::redirect('/anasayfa', 'home')->name('anasayfa');
Route::redirect('/', 'home')->name('anasayfa');

//HOME
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/car/{id}/{slug}', [HomeController::class, 'car'])->name('car');
Route::get('/categorycars/{id}/{slug}', [HomeController::class, 'categorycars'])->name('categorycars');
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');
Route::post('/getcar', [HomeController::class, 'getcar'])->name('getcar');


//ADMIN
Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class,'index'])->name('adminhome')->middleware('auth');
Route::get('/login', [\App\Http\Controllers\HomeController::class,'login'])->name('login');
//to check the login request, create a new url
Route::post('/admin/logincheck', [\App\Http\Controllers\HomeController::class,'admin_logincheck'])->name('admin_logincheck');
Route::get('/logout', [\App\Http\Controllers\HomeController::class, 'logout'])-> name('admin_logout');





Route::middleware('auth')->prefix('admin')->group(function (){

    Route::middleware('admin')->group(function (){

        Route::get('/' , [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
        Route::get('/category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_categoryList');
        Route::get('/category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
        Route::post('/category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
        Route::get('/category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
        Route::post('/category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
        Route::get('/category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
        Route::get('/category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');



        //  ****** CARS ******
        Route::prefix('cars')->group(function (){
            Route::get('/' , [App\Http\Controllers\Admin\CarsController::class, 'index'])->name('admin_cars');
            Route::get('create' , [App\Http\Controllers\Admin\CarsController::class, 'create'])->name('admin_cars_add');
            Route::post('store' , [App\Http\Controllers\Admin\CarsController::class, 'store'])->name('admin_cars_store');
            Route::get('edit/{id}' , [App\Http\Controllers\Admin\CarsController::class, 'edit'])->name('admin_cars_edit');
            Route::post('update/{id}' , [App\Http\Controllers\Admin\CarsController::class, 'update'])->name('admin_cars_update');
            Route::get('delete/{id}' , [App\Http\Controllers\Admin\CarsController::class, 'destroy'])->name('admin_cars_delete');
            Route::get('show/{id}' , [App\Http\Controllers\Admin\CarsController::class, 'show'])->name('admin_cars_show');


        });

        // ****** CONTACT MESSAGES ******
        Route::prefix('messages')->group(function (){
            Route::get('/' , [MessageController::class, 'index'])->name('admin_message');
               Route::get('edit/{id}' , [MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('update/{id}' , [MessageController::class, 'update'])->name('admin_message_update');
            Route::get('delete/{id}' , [MessageController::class, 'destroy'])->name('admin_message_delete');
            Route::get('show', [MessageController::class, 'show'])->name('admin_message_show');


        });
            // ****** REVİEWS******
            Route::prefix('review')->group(function (){
                Route::get('/' , [ReviewController::class, 'index'])->name('admin_review');
                Route::post('update/{id}' , [ReviewController::class, 'update'])->name('admin_review_update');
                Route::get('delete/{id}' , [ReviewController::class, 'destroy'])->name('admin_review_delete');
                Route::get('show/{id}', [ReviewController::class, 'show'])->name('admin_review_show');


            });
            // ****** RESERVATİONS******
            Route::prefix('reservation')->group(function (){
                Route::get('/' , [ReservationController::class, 'show'])->name('admin_reservation');
                Route::get('delete/{id}/{car_id}' , [ReservationController::class, 'destroy'])->name('admin_reservation_delete');
                Route::get('show/{id}', [\App\Http\Controllers\ReservationController::class, 'show'])->name('admin_reservation_show');


            });


        // Image Gallery
        Route::prefix('image')->group(function () {
            Route::get('/create/{car_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
            Route::post('store/{car_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
            Route::get('delete/{id}/{car_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
        });

        //    Formu çağırıyorsak Route::get kullanılır veri almak içinse POST

        Route::get('settings' , [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::post('settings/Update' , [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');
    });
});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/', [UserController::class, 'index'])->name('myprofile');
    Route::get('/myreviews', [UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/destroymyreview/{id}', [UserController::class, 'destroymyreview'])->name('user_review_delete');

});
Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
    Route::get('/profile', [UserController::class, 'index'])->name('myprofile');

});
Route::prefix('faq')->group(function (){
    Route::get('/' , [FaqController::class, 'index'])->name('admin_faq');
    Route::get('create' , [FaqController::class, 'create'])->name('admin_faq_add');
    Route::post('store' , [FaqController::class, 'store'])->name('admin_faq_store');
    Route::get('edit/{id}' , [FaqController::class, 'edit'])->name('admin_faq_edit');
    Route::post('update/{id}' , [FaqController::class, 'update'])->name('admin_faq_update');
    Route::get('delete/{id}' , [FaqController::class, 'destroy'])->name('admin_faq_delete');
    Route::get('show' , [FaqController::class, 'show'])->name('admin_faq_show');


});
Route::prefix('user')->group(function (){
    Route::get('/' , [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
    Route::post('create' , [App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_users_add');
    Route::post('store' , [App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_users_store');
    Route::get('edit/{id}' , [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_users_edit');
    Route::post('update/{id}' , [App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_users_update');
    Route::get('delete/{id}' , [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_users_delete');
    Route::get('show/{id}' , [App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
    Route::get('userrole/{id}' , [App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
    Route::post('userrolestore/{id}' , [App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
    Route::get('userroledelete/{userid}/{roleid}' , [App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');

//    Route::prefix('shopcart')->group(function (){
//        Route::get('/' , [ShopcartController::class, 'index'])->name('user_shopcart');
//        Route::post('add/{id}' , [ShopcartController::class, 'store'])->name('user_shopcart_add');
//        Route::post('update/{id}' , [ShopcartController::class, 'update'])->name('user_shopcart_update');
//        Route::get('delete/{id}' , [ShopcartController::class, 'destroy'])->name('user_shopcart_delete');
//    });
    Route::prefix('reservation')->group(function (){
        Route::get('/' , [App\Http\Controllers\Admin\ReservationController::class, 'index'])->name('user_reservation');
        Route::post('create/{id}' , [App\Http\Controllers\Admin\ReservationController::class, 'create'])->name('user_reservation_add');
        Route::post('add/{car_id}' , [App\Http\Controllers\Admin\ReservationController::class, 'store'])->name('user_reservation_create');
        Route::post('update/{id}' , [App\Http\Controllers\Admin\ReservationController::class, 'update'])->name('user_reservation_update');
        Route::get('delete/{id}/{car_id}' , [App\Http\Controllers\Admin\ReservationController::class, 'destroy'])->name('user_reservation_delete');
        Route::get('show/{id]' , [App\Http\Controllers\Admin\ReservationController::class, 'show'])->name('user_reservation_show');
    });


});








Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');















