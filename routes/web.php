<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceDepartmentController;
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


Route::get('/',[HomeController::class,'index'])->name('dashboard');
Route::get('/services',[ServiceController::class,'index'])->name('services');
Route::get('/services-department',[ServiceDepartmentController::class,'index'])->name('services-department');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
