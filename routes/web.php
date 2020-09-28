<?php

use Illuminate\Support\Facades\Route;
Route::get('/', 'StanzaContr@home') -> name('home');
Route::get('/rooms', 'StanzaContr@rooms') -> name('rooms');
Route::get('/room/{id}', 'StanzaContr@show') -> name('room-show');
Route::get('/create/rooms', 'StanzaContr@create') -> name('room-create');
Route::post('/create/rooms', 'StanzaContr@store') -> name('room-store');

Route::get('/payments', 'PagaCtrl@paga') -> name('payments');
Route::get('/payments/delete/{id}', 'PagaCtrl@destr') -> name('payment-destr');
Route::get('/payments/edit/{id}', 'PagaCtrl@edit') -> name('payment-edit');
Route::post('/payments/update/{id}', 'PagaCtrl@update') -> name('payment-update');
