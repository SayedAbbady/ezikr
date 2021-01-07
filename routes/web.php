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





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get("/blog/{id}","HomeController@blog")->name('blog');

Route::get("/","HomeController@index")->name('book');
// send contact form with ajax
Route::post("/bookWithus","HomeController@storeInquiry");

//send coment form with ajax
Route::post("/saveComment","HomeController@saveForm");

//search blogs
Route::get('/autocomplete', 'HomeController@autocomplete');
