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
// // Route::get('/admin', function () {
// //     return view('admin.index');
// //     })->name('admin.login'); 



// for now only

Route::get(
    '/admin', 'Admin\AdminController@IndexLogin'
    )->name('admin.login');

Route::get('/admin/dashboard',function () {
    return view ('admin.dashboard');
});


