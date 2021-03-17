<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('categories','App\Http\Controllers\CategoryController@index')->name('category.index');
Route::get('category/{id}','App\Http\Controllers\CategoryController@show')->name('category.show');
Route::post('category/create','App\Http\Controllers\CategoryController@store')->name('category.store');
Route::put('category/update/{id}','App\Http\Controllers\CategoryController@update')->name('category.update');
Route::delete('category/delete/{id}','App\Http\Controllers\CategoryController@destroy')->name('category.delete');

Route::get('products','App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('product/{id}','App\Http\Controllers\ProductController@show')->name('product.show');
Route::post('product/create','App\Http\Controllers\ProductController@store')->name('product.store');
Route::put('product/update/{id}','App\Http\Controllers\ProductController@update')->name('product.update');
Route::delete('product/delete/{id}','App\Http\Controllers\ProductController@destroy')->name('product.destroy');

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
