<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {  return view('welcome'); });
// Route::get('/', function () {  echo 'Olá Mundo! '; });

/* TESTE */
// Route::get('/', function () { echo 'Minha Primeira página';});
// Route::get('/novo', function(){ echo 'Página de TESTE';});

// Route::get('/', [Teste::class, 'index']);
// Route::get('/frm', [Teste::class, 'formulario']);

// Route::get('/', 'teste@index');
Route::get('/frm', 'teste@formulario');

Route::view('/pagina', 'pagina');
Route::view('/paginaphp', 'paginaphp');

// Rota com passagem de dados
Route::view('paginablade','paginablade',['nome' => 'Nildson Kleyton']);
Route::get('/paginablade2','teste@exibirNome');

// Rota com parâmetros obrigatórios
Route::get('/user/{nome}', function($nome){ echo "Olá $nome!";} ); //url teste ->  /user/Nildson
Route::get('/user/{nome}/{apelido}', function($nome, $apelido ){ echo "Olá $nome $apelido!!";} );

// // recebe um ou dois parâmetros,
// Route::get('/user2/{nome}', 'Teste@user' ); 
Route::get('/user2/{nome}/{apelido?}', 'Teste@user' );//url teste ->  /user2/Nildson/Kleyton ou user2/Nildson/

// recebe um ou dois parâmetros, chamando View
//url teste -> user3/Nildson/Kleyton ou user3/Nildson/
Route::get('/user3/{nome}/{apelido?}', 'teste@user2'); // nome é um parâmetro obrigatório e o apelido não

// Dois parâmetro obrigatórios e um não (primeiro os obrigatórios)
Route::get('/user4/{nome}/{idade}/{apelido?}', 'teste@user3'); //url teste -> user4/Nildson/46/Kleyton ou user4/Nildson/46/

Route::get('/home','Main@home')->name('inicio');
Route::get('/serviços','Main@servico')->name('servico');
Route::get('/contatos','Main@contatos')->name('contato');

Route::get ('clientes','Clientes@index');
Route::get ('clientes_nomes','Clientes@nomes');
Route::get ('clientes_email','Clientes@email');// erro, não chama métodos privado

Route::get('produtos','Stock\Produtos@index');// acessa o controler em um subdiretório

Route::get('estado/{v}', 'Stats');//chama o único método do controller url:http://localhost/estudando-laravel/public/estado/Pernambuco

Route::get('pessoas/{index}','Pessoas@pessoas');
Route::get('pessoas-dados/{dado}/{index?}','Pessoas@dados');

Route::resource('produto', 'Produtos');// chama o crud do controller

Route::view('ver','pagina'); // na view não é preciso por a /
// Route::view('ver-clientes','clientes\clientes'); // acessa a página cliente.blade no diretório cliente
Route::view('ver-clientes','clientes.clientes'); // acessa a página cliente.blade no diretório cliente
Route::get('ver-clientes-cont','Clientes@pagina'); // acessa a página cliente.blade no diretório cliente

Route::get('/','Home@home');