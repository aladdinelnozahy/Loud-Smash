<?php

use Illuminate\Support\Facades\Route;
// define('PAGINATE',4);

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Admin" middleware group. Now create something great!
|
*/
Route::group([], function(){

    // ============================ begin login routes ============================
    Route::get('/', 'AdminController@login')->name('admin.login');
    Route::post('/login', 'AdminController@user_login')->name('user.login');
    Route::get('/logout', 'AdminController@user_logout')->name('user.logout');

    // ============================ end user routes ==============================
});



Route::group(['prefix' =>'','middleware'=>'prevent'], function(){

    // ============================ begin dashboard routes =========================
    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');

    // ============================ end dashboard routes ===========================


    // ============================ begin user routes =============================
    Route::get ('/users','UserController@user')->name('create.user');
    Route::get ('/userform','UserController@user_form')->name('user.form');
    Route::post ('/adduser','UserController@add_user')->name('add.user');
    Route::get ('/deleteuser/{id}','UserController@delete_user')->name('delete.user');
    Route::get ('/edituser/{id}','UserController@edit_user')->name('edit.user');
    Route::post ('/updateuser/{id}','UserController@update_user')->name('update.user');
    Route::get ('/get-inactive-users','UserController@show_inactive_users');

    // ============================ end user routes ===============================
    
    // ============================ begin artist routes =============================
    Route::get ('/artists','ArtistController@show_artist')->name('admin.artist');
    Route::get ('/artistform','ArtistController@artist_form')->name('artist.form');

    Route::post ('/addartists','ArtistController@add_artist')->name('add.artist');
    Route::get ('/deleteartist/{id}','ArtistController@delete_artist')->name('delete.artist');
    Route::get ('/editartist/{id}','ArtistController@edit_artist')->name('edit.artist');
    Route::post ('/updateartist/{id}','ArtistController@update_artist')->name('update.artist');

    Route::get ('/show-artist-songs/{id}','ArtistController@show_artist_songs')->name('show.artist.songs');
    Route::post ('/save-songs-to-artist','ArtistController@save_artist_songs')->name('save.artist.songs');

    // Route::get ('/artist-songs','ArtistController@artist_songs')->name('artist.songs');

    // ============================ end artist routes ===============================

    // ============================ begin band routes ===============================
    Route::get ('/bands','BandController@show_band')->name('admin.bands');
    Route::get ('/bandform','BandController@band_form')->name('band.form');
    Route::post ('/addband','BandController@add_band')->name('add.band');
    Route::get ('/deleteband/{id}','BandController@delete_band')->name('delete.band');
    Route::get ('/editband/{id}','BandController@edit_band')->name('edit.band');
    Route::post ('/updateband/{id}','BandController@update_Band')->name('update.band');

    // ============================ end band routes =================================

    // ============================ bagin song routes ===============================
    Route::get ('/songs','SongController@song')->name('admin.songs');
    Route::get ('/songform','SongController@song_form')->name('song.form');
    Route::post ('/addsong','SongController@add_song')->name('add.song');
    Route::get ('/deletesong/{id}','SongController@delete_song')->name('delete.song');
    Route::get ('/editsong/{id}','SongController@edit_song')->name('edit.song');
    Route::post ('/updatesong/{id}','SongController@update_song')->name('update.song');
    Route::post ('/search-songs','SongController@search_song')->name('search.song');
    Route::get ('/show-song-details/{id}','SongController@song_details');


    // ============================ end song routes =================================


    // ============================ begin event routes ==============================
    Route::get ('/events','EventController@event')->name('admin.events');
    Route::get ('/eventform','EventController@event_form')->name('event.form');
    Route::post ('/addevent','EventController@add_event')->name('add.event');
    Route::get ('/deleteevent/{id}','EventController@delete_event')->name('delete.event');
    Route::get ('/editevent/{id}','EventController@edit_event')->name('edit.event');
    Route::post ('/updateevent/{id}','EventController@update_event')->name('update.event');

    // ============================ end event routes ================================


    // ============================ begin category routes ===========================
    Route::get ('/categories','CategoryController@category')->name('admin.categories');
    Route::get ('/categoryform','CategoryController@category_form')->name('category.form');
    Route::post ('/addcategory','CategoryController@add_category')->name('add.category');
    Route::get ('/deletecategory/{id}','CategoryController@delete_category')->name('delete.category');
    Route::get ('/editcategory/{id}','CategoryController@edit_category')->name('edit.category');
    Route::post ('/updatecategory/{id}','CategoryController@update_category')->name('update.category');
    Route::get ('/showsongs','CategoryController@show_category_songs')->name('show.songs');

    // ============================ end category routes =============================



});



