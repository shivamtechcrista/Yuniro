<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceDepartmentController;
use App\Http\Controllers\UserController;
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

// Route::group(['middleware' => 'guest'],function(){
    
    Route::get('/',[HomeController::class,'index'])->name('dashboard');
    Route::get('/services',[ServiceController::class,'index'])->name('services');
    Route::get('/services-department',[ServiceDepartmentController::class,'index'])->name('services-department');
    Route::post('/contactSave',[ContactController::class,'save'])->name('contactSave');
    
    Route::get('/login',[UserController::class,'index'])->name('login');
    Route::post('/checkAuth',[UserController::class,'login'])->name('loginCheck');
    Route::get('/contact',[ContactController::class,'index'])->name('contact');
    
// });
Route::group(['middleware' => 'auth'],function(){
    Route::get('/logout',[UserController::class,'logout'])->name('logout');
    Route::get('/dashboard',[AdminController::class,'index'])->name('admin-dashboard');
    Route::get('/admin-contact',[AdminController::class,'contact'])->name('admin-contacts');
});






