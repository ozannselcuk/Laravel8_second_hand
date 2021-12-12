<?php

use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/home',[\App\Http\Controllers\HomeController::class,'index'])->name('homepage');
Route::get('/aboutus',[\App\Http\Controllers\HomeController::class,'aboutus'])->name('aboutus');
Route::get('/faq',[\App\Http\Controllers\HomeController::class,'faq'])->name('faq');
Route::get('/contact',[\App\Http\Controllers\HomeController::class,'contact'])->name('contact');
Route::post('/send',[HomeController::class , 'sendmessage'])->name('send_message');
Route::get('/product/{id}/{slug}',[\App\Http\Controllers\HomeController::class,'product'])->name('product');
Route::get('/categoryproducts/{id}/{slug}',[\App\Http\Controllers\HomeController::class,'categoryproducts'])->name('categoryproducts');
Route::get('/references',[\App\Http\Controllers\HomeController::class,'references'])->name('references');
Route::get('/user/profile',[\App\Http\Controllers\HomeController::class,'profile'])->name('profile');
Route::get('/addtocart/{id}',[\App\Http\Controllers\HomeController::class,'addtocart'])->name('addtocart');
Route::post('/getproduct',[\App\Http\Controllers\HomeController::class,'getproduct'])->name('getproduct');
//Admin
Route::get('/admin',[\App\Http\Controllers\Admin\HomeController::class, "index"])->name( 'adminHome')->middleware('auth');
//login
Route::get('/admin/login',[\App\Http\Controllers\Admin\HomeController::class, "adminLogin"])->name( 'adminLogin');
//login_check
Route::post('/admin/logincheck',[\App\Http\Controllers\Admin\HomeController::class, "loginCheck"])->name( 'adminLoginCheck');

//logout
Route::get('/Logout',[HomeController::class, "logout"])->name( 'logout');

Route::middleware('auth')->prefix('admin')->group(function (){
    //Route::get('/',[\App\Http\Controllers\Admin\AdminController::class , 'adminHome'])->name('adminHome');
//cateory
    Route::get('category' , [\App\Http\Controllers\Admin\CategoryController::class , 'index'])->name('admin_category');
    Route::get('category/add' , [\App\Http\Controllers\Admin\CategoryController::class , 'add'])->name('admin_category_add');
    Route::post('category/create' , [\App\Http\Controllers\Admin\CategoryController::class , 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}' , [\App\Http\Controllers\Admin\CategoryController::class , 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}' , [\App\Http\Controllers\Admin\CategoryController::class , 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}' , [\App\Http\Controllers\Admin\CategoryController::class , 'destroy'])->name('admin_category_delete');
    Route::get('category/show' , [\App\Http\Controllers\Admin\CategoryController::class , 'show'])->name('admin_category_show');

    //product
    Route::prefix('product')->group(function() {
        Route::get('/' , [\App\Http\Controllers\Admin\ProductController::class , 'index'])->name('admin_products');
        Route::get('/create' , [\App\Http\Controllers\Admin\ProductController::class , 'create'])->name('admin_product_add');
        Route::post('store' , [\App\Http\Controllers\Admin\ProductController::class , 'store'])->name('admin_product_store');
        Route::get('edit/{id}' , [\App\Http\Controllers\Admin\ProductController::class , 'edit'])->name('admin_product_edit');
        Route::post('update/{id}' , [\App\Http\Controllers\Admin\ProductController::class , 'update'])->name('admin_product_update');
        Route::get('delete/{id}' , [\App\Http\Controllers\Admin\ProductController::class , 'destroy'])->name('admin_product_delete');
        Route::get('show' , [\App\Http\Controllers\Admin\ProductController::class , 'show'])->name('admin_product_show');
    });

    //product
    Route::prefix('messages')->group(function() {
        Route::get('/' , [MessageController::class , 'index'])->name('admin_message');
        Route::get('edit/{id}' , [MessageController::class , 'edit'])->name('admin_message_edit');
        Route::post('update/{id}' , [MessageController::class , 'update'])->name('admin_message_update');
        Route::get('delete/{id}' , [MessageController::class , 'destroy'])->name('admin_message_delete');
        Route::get('show' , [MessageController::class , 'show'])->name('admin_message_show');
    });
    //image
    Route::prefix('image')->group(function() {

        Route::get('create/{product_id}' , [\App\Http\Controllers\Admin\ImageController::class , 'create'])->name('admin_image_add');
        Route::post('store/{product_id}' , [\App\Http\Controllers\Admin\ImageController::class , 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{product_id}' , [\App\Http\Controllers\Admin\ImageController::class , 'destroy'])->name('admin_image_delete');
        Route::get('show' , [\App\Http\Controllers\Admin\ImageController::class , 'show'])->name('admin_image_show');
    //setting
        });
    Route::get('setting' , [\App\Http\Controllers\Admin\SettingController::class , 'index'])->name('admin_setting');
    Route::post('setting/update' , [\App\Http\Controllers\Admin\SettingController::class , 'update'])->name('admin_setting_update');
});
Route::middleware('auth')->prefix('user')->namespace('profile')->group(function (){
    Route::get('/',[UserController::class,'index'])->name('profile');
});
Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
    Route::get('/profile',[UserController::class,'index'])->name('userprofile');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



