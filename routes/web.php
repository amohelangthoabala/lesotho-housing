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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::post('/posts/{post}/status', 'PostStatusController@store')->name('posts.status');

Route::get('/appform', 'ApplicationController@index')->name('appform');
Route::post('/appform', 'ApplicationController@store');

//Route::get('/appsuccess', 'ApplicationController@success')->name('appsuccess');
//Route::redirect('/appsuccess', '/statusapp', 301);
//Route::post('/applications', 'ApplicationController@status')->name('applications');
Route::get('/statusapp', 'ApplicationController@status')->name('statusapp');
//Route::post('/statusapp', 'ApplicationController@status')->name('statusapp');

Route::get('/adminpage', 'AdminController@index')->name('adminpage');
Route::get('/adminlist', 'AdminController@users')->name('adminlist');
Route::delete('adminlist/{user}', 'PostController@destroy')->name('adminlist.destroy');

Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog-single', 'BlogController@post')->name('blog-single');
