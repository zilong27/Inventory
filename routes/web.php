<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ItemModelsController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SuppliersController;
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


Route::group(['midleware'=>'auth'],function(){
Auth::routes();
Route::resource('/products','App\Http\Controllers\ProductController');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/settings','App\Http\Controllers\SettingsController');
});
//setitngs
Route::group(['midleware' => 'settings','prefix' =>'settings.'],function(){
    Route::resource('/models','App\Http\Controllers\ItemModelsController');
    Route::resource('/suppliers','App\Http\Controllers\SuppliersController');
    Route::resource('/locations','App\Http\Controllers\LocationController');
});


