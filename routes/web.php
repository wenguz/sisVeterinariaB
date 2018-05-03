<?php

Route::get('/', function () {
    return view('');
});

Route::resource('administrador/personal', 'PersonalController');
Route::resource('administrador/propietario', 'PropietarioController');
