<?php




Route::get('/', 'HomeController@index')->name('home');
Route::resource('/categoria', 'CategoriaController');
