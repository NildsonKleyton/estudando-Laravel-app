<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {  return view('welcome'); });

Route::get('/', 'Main@home');
Route::get('/route', 'Main@minhaRoute')->name('minha_route');