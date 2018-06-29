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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/nha-dat/{id}', 'HomeController@detail')->name('detail');
Route::get('/nha-dat/thanh-pho/{id}', 'HomeController@city')->name('city');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
