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

Route::get('/', 'WebsiteController@index')->name('index');
Route::get('category/{slug}', 'WebsiteController@category')->name('category');
Route::get('post/{slug}', 'WebsiteController@post')->name('post');
Route::get('page/{slug}', 'WebsiteController@page')->name('page');
Route::get('contact', 'WebsiteController@showContactForm')->name('contact.show');
Route::post('contact', 'WebsiteController@submitContactForm')->name('contact.submit');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('categories', 'CategoryController');
    Route::resource('posts', 'PostController');
    Route::resource('pages', 'PageController');
    Route::resource('galleries', 'GalleryController');
});



