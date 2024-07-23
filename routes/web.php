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


Route::get('/','App\Http\Controllers\Home@index');
Route::get('/home','App\Http\Controllers\Home@index');
Route::get('/category/{cat}/{subcat}','App\Http\Controllers\Category@index');
Route::get('/productDetails/{id}','App\Http\Controllers\Product@index');
