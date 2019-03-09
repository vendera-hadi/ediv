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

Route::get('/', 'ContentController@home')->name('home');
Route::get('/contact-us', 'ContentController@contact')->name('contact');
Route::get('/faq', 'ContentController@faq')->name('faq');
Route::get('/pt-meiji-indonesia', 'ContentController@company')->name('company');
Route::get('/news-event', 'ContentController@news')->name('news-event');
Route::get('/article', 'ContentController@article')->name('article');
Route::get('/product', 'ContentController@product')->name('product');
