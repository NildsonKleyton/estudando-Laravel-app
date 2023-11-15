<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller

{
    public function home()
    {
        // return view('home', ['nome' => 'Nildson', 'idade' => 46]);

        // ou 
        
        $dados = [
            'nome' => 'Nildson',
            'idade' => 47,
            'telefones' => [
                '6 5465-4657',
                '9 8762-4987',
                '9 8465-8454'
            ]
        ];

        return view('home', $dados);
    }
}
