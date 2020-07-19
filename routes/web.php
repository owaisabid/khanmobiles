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
    return view('pages.index');
});

Route::get('/adminpanel', function () {
    return view('pages.adminpanel');
});
Auth::routes();

// Route::get('/adminpanel')->name('adminpanel');
Route::get('/home', 'HomeController@index')->name('home');
