<?php

use Illuminate\Support\Facades\Route;
// add to admin
define('PAGINATE',4);
/*
|-------------------------------- ------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//'prefix'=> '{locale}',
Route::group(['namespace' => 'FrontEnd'] , function(){
    Route::get('/', 'SiteController@index')->name('site.home');

    Route::post('/show-songs', 'SiteController@show_songs')->name('frontshow.songs');
    // Route::get ('/front-showsongs','CategoryController@show_category_songs')->name('show.songs');


});

// ===----====-----===---===---===admin routes===---===---===---===---



