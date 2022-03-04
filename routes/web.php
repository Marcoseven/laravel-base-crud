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
    return view('home');
})->name('home');

Route::view('admin', 'admin.dashboard')->name('admin');
Route::resource('admin/comics', 'Admin\ComicController');
Route::resource('admin/posts', 'Admin\PostController');

/* comics_routes */

/* Route::get('/comics', 'ComicController@index')->name('comics');
Route::get('comics/{comic}', 'ComicController@show')->name('comic');  
 */
/* /comics_routes */



Route::get('/movies', 'MovieController@index')->name('movies');
Route::get('movies/{movie}', 'MovieController@show')->name('movie');

Route::get('/comics', 'ComicController@index')->name('comics');
Route::get('comics/{comics}', 'ComicController@show')->name('comic');