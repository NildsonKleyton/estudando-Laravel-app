<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function home()
    {

        $data = [
            'titulo' => 'Página de teste',
            'texto'  => 'Este é o testo da página',
            'valor'  => 100,
            'nomes'  => ['Nildson', ' Kleyton', 'Heitor', 'Honorato', 'Jake'],
            // 'nomes'  => [],

            'teste'  => null
        ];

        return view('home', $data);
    }

    public function minhaRoute()
    {
        echo 'estou aqui';
    }
}
