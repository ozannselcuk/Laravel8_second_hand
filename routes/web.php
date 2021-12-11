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

Route::get('/', function () {
    return view('home.home');
});
//Admin
Route::get('/admin',[\App\Http\Controllers\Admin\HomeController::class, "index"])->name( 'adminHome');
//login
Route::get('/admin/login',[\App\Http\Controllers\Admin\HomeController::class, "adminLogin"])->name( 'adminLogin');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



