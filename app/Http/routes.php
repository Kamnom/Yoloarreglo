<?php


Route::get('/', 'IndexController@index');
Route::get('/Join', 'IndexController@join');
Route::get('/Login', 'IndexController@login');
Route::get('/Acerca de', 'IndexController@aboutus');
Route::get('/Tutoriales', 'IndexController@tutoriales');
Route::get('/Tienda', 'IndexController@store');
Route::get('/Contactanos', 'IndexController@callus');
Route::get('/Experto', 'IndexController@tutoriales');


