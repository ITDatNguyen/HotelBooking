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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search', function () {
    return view('pages.search_hotel');
    });
Route::get('/detail_booking', function () {
    return view('Hotel.detailHotel');
});
Route::get('/page_home', function () {
    return view('Home');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('test',function(){
	return view('admin.master');
});
