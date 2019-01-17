<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/','PagesController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products','ProductsController@index');
Route::post('/products','ProductsController@store')->name('products.store');
Route::get('/products/create','ProductsController@create')->name('products.create');
Route::get('/products/{id}','ProductsController@show')->name('products.update');
Route::get('/products/{id}/edit','ProductsController@edit')->name('products.edit');
Route::get('/index','pagescontroller@index');

//Route::get('/', function (\Illuminate\Http\Request $request) {
//    $request->session()->put('name','hosein');
//    return view('welcome');
//});
////////////////////////////

