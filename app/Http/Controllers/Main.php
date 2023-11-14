<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function home(){
        echo '<h3>Home</h3>';
        echo '<hr>';
        echo '<a href="'.route('inicio').'">Home</a><br>';
        echo '<a href="'.route('servico').'">Serviços</a><br>';
        echo '<a href="'.route('contato').'">Contatos</a><br>';
    }
    
    public function servico(){
        echo '<h3>Serviço</h3>';
        echo '<hr>';
        echo '<a href="'.route('inicio').'">Home</a><br>';
        echo '<a href="'.route('servico').'">Serviços</a><br>';
        echo '<a href="'.route('contato').'">Contatos</a><br>';
    }
    
    public function contatos(){
        echo '<h3>Contatos</h3>';
        echo '<hr>';
        echo '<a href="'.route('inicio').'">Home</a><br>';
        echo '<a href="'.route('servico').'">Serviços</a><br>';
        echo '<a href="'.route('contato').'">Contatos</a><br>';
    }
}
