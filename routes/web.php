<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'FrontendController@index')->name('frontend.index');
Route::post('/store', 'FrontendController@store')->name('frontend.store');
Route::get('/about', 'FrontendController@about')->name('frontend.about');
Route::get('/contact', 'FrontendController@contact')->name('frontend.contact');
Route::get('/service', 'FrontendController@service')->name('frontend.service');
Route::get('/service/items/{id}', 'FrontendController@sub_services')->name('frontend.sub_services');
Route::get('add-product-images/{product}', 'ProductController@addMultipleImage')->name('addImages');
Route::resource('slider','SliderController');
Route::resource('partner','PartnerController');

Route::resource('categories', 'CategoryController');
Route::resource('products', 'ProductController');
