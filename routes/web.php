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
    return view('booking');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/booking', function () {
//     return view('booking');
// });

Route::get('index','BookingController@index');
Route::post('store','BookingController@store');

Route::get('admin','AdminController@admin');
Route::post('store1','AdminController@store1');
Route::get('view-records','AdminController@admin');

Route::get('bookingTable','BookingTableController@bookingTable');
Route::get('return','BookingTableController@return');
