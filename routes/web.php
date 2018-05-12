<?php

Route::get('/', function () {
    return view('');
});

Route::resource('administrador/personal', 'PersonalController');
Route::resource('administrador/propietario', 'PropietarioController');
Route::resource('administrador/mascota', 'MascotaController');
Route::resource('administrador/historial', 'HistorialController');

Route::resource('veterinario/propietario', 'PropietarioController');
Route::resource('veterinario/mascota', 'MascotaController');
Route::resource('veterinario/historial', 'HistorialController');

Route::resource('recepcionista/propietario', 'PropietarioController');
Route::resource('recepcionista/mascota', 'MascotaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
