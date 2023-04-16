<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');
Route::get('/tahunan', 'TaunanController@index')->name('tahunan');
Route::get('/pageharian', 'PageHarianController@index')->name('pageharian');
Route::get('/listlaporan', 'ListLaporanController@index')->name('listlaporan');
Route::get('/Pegawai', 'PegawaiController@index')->name('Pegawai');
Route::get('/Atasan', 'AtasanController@index')->name('Atasan');

Route::get('/about', function () {
    return view('about');
})->name('about');

