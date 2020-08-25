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
    return view('homeContent');
});

Route::get('frp', 'ProductController@frp');
Route::get('ldpe', 'ProductController@ldpe');
Route::get('manhole', 'ProductController@manhole');
Route::get('msgi', 'ProductController@msgi');
Route::get('pvc', 'ProductController@pvc');

Route::get('about', 'LinkController@about');
Route::get('contact', 'LinkController@contact');
Route::get('projects', 'LinkController@project');
// Route::post('submit', 'ContactController');
// Route::resource('contactus','ContactController');

Route::resource('data','TableController');
