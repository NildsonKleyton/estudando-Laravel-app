<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|wwwwwwwwwwwwwwsdd
*/

// Route::get('/', function () {
//     return view('welcome');
// });

/* TESTE */
// Route::get('/', function () {
//     echo 'Minha Primeira página';
// });

// Route::get('/teste', function(){
//     echo 'Página de TESTE';
// });

Route::any('/', 'Teste@index');