<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Clientes extends Controller
{
    public function index(){
        echo 'Clientes';
    }
    
    public function nomes(){
        echo 'Clientes - nome <br>';
        $this->email();
    }

    private function email(){
        echo 'email do cliente';
    }

    public function pagina(){

        echo '<h2>inicio</h2>';
        echo view('clientes.clientes');
        echo '<h2>fim</h2>';
        
        // return view('clientes.clientes');
    }
}
