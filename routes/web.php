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
Route::get('/pageharian', 'LaporanHarianController@index')->name('pageharian');
Route::post('/pageharian', 'LaporanHarianController@store')->name('pageharian.store');
Route::patch('/pageharian/update/{id}', 'LaporanHarianController@update')->name('pageharian.update');
Route::delete('/pageharian/destroy/{id}', 'LaporanHarianController@destroy')->name('pageharian.destroy');
Route::get('/listlaporan', 'ListLaporanController@index')->name('listlaporan');
Route::get('/Pegawai', 'PegawaiController@index')->name('Pegawai');
Route::get('/Atasan', 'AtasanController@index')->name('Atasan');
Route::get('/detail/{id}', 'HomeController@detail')->name('detail');

Route::get('/about', function () {
    return view('about');
})->name('about');

