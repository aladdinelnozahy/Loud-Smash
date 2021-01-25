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

Route::get('/', 'FrontEnd\SiteController@index')->name('site.home');

// admin routes
Route::group(['prefix'=>'admin' , 'namespace' => 'Admin'], function(){
    
    // ============================ begin login routes ============================
    Route::get('/', 'AdminController@login')->name('admin.login');
    // ============================ end user routes ==============================


    // ============================ begin dashboard routes =========================
    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    // ============================ end dashboard routes ===========================


    // ============================ begin user routes =============================
    Route::get ('/users','UserController@user')->name('create.user');
    Route::get ('/userform','UserController@user_form')->name('user.form');
    Route::post ('/adduser','UserController@add_user')->name('add.user');
    Route::get ('/deleteuser/{id}','UserController@delete_user')->name('delete.user');
    Route::get ('/edituser/{id}','UserController@edit_user')->name('edit.user');

    // ============================ end user routes ===============================


    // ============================ begin artist routes =============================
    Route::get ('/artists','ArtistController@show_artist')->name('admin.artist');
    Route::get ('/artistform','ArtistController@artist_form')->name('artist.form');
    Route::post ('/addartists','ArtistController@add_artist')->name('add.artist');
    Route::get ('/deleteartist/{id}','ArtistController@delete_artist')->name('delete.artist');
    Route::get ('/editartist/{id}','ArtistController@edit_artist')->name('edit.artist');

    // ============================ end artist routes ===============================

    // ============================ begin band routes ===============================
    Route::get ('/bands','BandController@show_band')->name('admin.bands');
    Route::get ('/bandform','BandController@band_form')->name('band.form');
    Route::post ('/addband','BandController@add_band')->name('add.band');
    Route::get ('/deleteband/{id}','BandController@delete_band')->name('delete.band');
    Route::get ('/editband/{id}','BandController@edit_band')->name('edit.band');

    // ============================ end band routes =================================

    // ============================ bagin song routes ===============================
    Route::get ('/songs','SongController@song')->name('admin.songs');
    Route::get ('/songform','SongController@song_form')->name('song.form');
    Route::post ('/addsong','SongController@add_song')->name('add.song');
    Route::get ('/deletesong/{id}','SongController@delete_song')->name('delete.song');
    Route::get ('/editsong/{id}','SongController@song_category')->name('edit.song');

    // ============================ end song routes =================================


    // ============================ begin event routes ==============================
    Route::get ('/events','EventController@event')->name('admin.events');
    Route::get ('/eventform','EventController@event_form')->name('event.form');
    Route::post ('/addevent','EventController@add_event')->name('add.event');
    Route::get ('/deleteevent/{id}','EventController@delete_event')->name('delete.event');
    Route::get ('/editevent/{id}','EventController@event_category')->name('edit.event');

    // ============================ end event routes ================================


    // ============================ begin category routes ===========================
    Route::get ('/categories','CategoryController@category')->name('admin.categories');
    Route::get ('/categoryform','CategoryController@category_form')->name('category.form');
    Route::post ('/addcategory','CategoryController@add_category')->name('add.category');
    Route::get ('/deletecategory/{id}','CategoryController@delete_category')->name('delete.category');
    Route::get ('/editcategory/{id}','CategoryController@edit_category')->name('edit.category');
    // ============================ end category routes =============================


  
});

     

