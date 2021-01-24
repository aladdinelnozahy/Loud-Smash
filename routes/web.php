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


// Route::get('/', function () {
//     return view('layout.master');
// });
Route::get(
    '/', 'FrontEnd\SiteController@index'
    )->name('site.home');

//     Route::get('/admin', function () {
//         return view('admin.login');
//     })->name('admin.login');



// for now only
Route::group(['prefix'=>'admin' , 'namespace' => 'Admin'], function(){

    Route::get('/', 'AdminController@login')->name('admin.login');
    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');   
    Route::get ('/users','AdminController@user')->name('create.user');

    Route::get ('/artists','AdminController@artist')->name('admin.artists');
    Route::get ('/bands','AdminController@band')->name('admin.bands');
    Route::get ('/songs','AdminController@song')->name('admin.songs');
    Route::get ('/events','AdminController@event')->name('admin.events');
    Route::get ('/categories','AdminController@category')->name('admin.categories');
});

    
// Route::get('/admin/dashboard',function () {
//     return view ('admin.dashboard');
// });


