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
Route::get('/article/{slug}', 'ContentController@article_detail')->name('article_detail');
Route::get('/all/{type}', 'ContentController@article_list')->name('article_list');
Route::get('/product', 'ContentController@product')->name('product');
Route::post('/subscribe', 'ContentController@subscribe')->name('subscribe');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
  Route::get('/', 'AdminController@slider')->name('home');
  Route::get('/slider/new', 'AdminController@slider_new')->name('slider.new');
  Route::post('/slider', 'AdminController@slider_create')->name('slider.create');
  Route::get('/slider/{id}/edit', 'AdminController@slider_edit')->name('slider.edit');
  Route::post('/slider/{id}', 'AdminController@slider_update')->name('slider.update');
  Route::post('/slider/{id}/delete', 'AdminController@slider_destroy')->name('slider.destroy');

  Route::get('/newsletter', 'AdminController@newsletter')->name('newsletter');
  Route::get('/newsletter/download', 'AdminController@newsletter_download')->name('newsletter.download');

  Route::get('/news', 'AdminController@news')->name('news');
  Route::get('/event', 'AdminController@event')->name('event');
  Route::get('/article', 'AdminController@article')->name('article');
  Route::get('/new-post/{type}', 'AdminController@post_new')->name('post.new');
  Route::post('/post', 'AdminController@post_create')->name('post.create');
  Route::get('/post/{id}/edit', 'AdminController@post_edit')->name('post.edit');
  Route::post('/post/{id}', 'AdminController@post_update')->name('post.update');
  Route::post('/post/{id}/delete', 'AdminController@post_destroy')->name('post.destroy');

  Route::get('/setting', 'AdminController@setting')->name('setting');
  Route::post('/setting', 'AdminController@setting_update')->name('setting.update');
});

Auth::routes();
Route::get('/register', function(){
  return redirect('/');
})->name('register');
Route::get('password/reset', function(){
  return redirect('/');
})->name('password.request');
