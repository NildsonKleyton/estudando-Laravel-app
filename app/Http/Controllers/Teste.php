<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class Teste extends Controller
{
    //
    public function index(Request $request)
    {
        echo 'Conhecendo o Controller do Laravel';
    }

    public function formulario()
    {
        echo 'Fomulário de login';
    }

    public function exibirNome()
    {

        $nome = 'Heitor Honorato';
        return view('paginablade2', ['nome' => $nome]);
    }

    // recebe um ou dois parâmetros,
    public function user($nome, $apelido='')
    {
        echo 'Controle<br>';
        echo "$nome $apelido";
    }

    public function user2($nome, $apelido = '')
    {
    
        return view('user', ['nome' => $nome, 'apelido' => $apelido]);
    }

    public function user3($nome, $idade, $apelido = '')
    {
        // echo "Nome: $nome $apelido <br> Idade: $idade";
        return view('nome', ['nome' => $nome,'apelido'  => $apelido , 'idade' => $idade]);
    }
}
