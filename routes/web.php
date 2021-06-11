<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Input;
use App\User;


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

Route::resource('/products','App\Http\Controllers\ProductController');
Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/settings','App\Http\Controllers\SettingsController');
Route::get('/models', [App\Http\Controllers\ModelsController::class, 'index'])->name('models');
Route::get('/suppliers', [App\Http\Controllers\SuppliersController::class, 'index'])->name('suppliers');
Route::get('/location','App\Http\Controllers\LocationController@index')->name('location');