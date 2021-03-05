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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/course', [App\Http\Controllers\AdminController::class, 'course'])->name('course');
Route::get('/employee', [App\Http\Controllers\AdminController::class, 'employee'])->name('employee');
Route::get('/category', [App\Http\Controllers\AdminController::class, 'category'])->name('category');
Route::get('/instructure', [App\Http\Controllers\AdminController::class, 'instructure'])->name('instructure');
