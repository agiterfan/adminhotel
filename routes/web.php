<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/','HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*==================PROFILE====================*/
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

/*==================ROOM====================*/
Route::resource('room', 'RoomController');
Route::resource('roomType', 'JenisKamarController');
Route::put('/roomType', 'JenisKamarController@update')->name('roomType.update');


Route::get('/about', function () {
    return view('about');
})->name('about');
