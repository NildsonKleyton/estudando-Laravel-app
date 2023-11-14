<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class Home extends Controller

{
    public function home(){
        // return view('home', ['nome' => 'Nildosn', 'idade' => 46]);

        // ou 

        $dados = [
            'nome' => 'Nildosn', 
            'idade' => 47,
            'telefones' =>[
                '654654657',
                '987624987'
            ]
        ];
        
        return view('home', $dados);
    }
}
