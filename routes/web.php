<?php

use Illuminate\Support\Facades\Route;
Route::get('/', 'StanzaContr@index') -> name('index');
Route::get('/room/{id}', 'StanzaContr@show') -> name('room-show');
Route::get('/create/rooms', 'StanzaContr@create') -> name('room-create');
Route::post('/create/rooms', 'StanzaContr@store') -> name('room-store');
