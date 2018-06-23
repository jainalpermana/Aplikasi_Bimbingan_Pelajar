<?php

Route::get('/', 'DirectController@index');


Route::resource('/identifikasi', 'IdentifikasiController');

Route::resource('/tindakan', 'TindakanController');

Route::resource('/verifikasi', 'VerifikasiController');

Route::get('query', 'IdentifikasiController@search');
Route::auth();

Route::get('/home', 'HomeController@index');
