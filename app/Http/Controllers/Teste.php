<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Teste extends Controller
{
    public function index()
    {
        echo 'Conhecendo o Controller do Laravel';
    }
    
    public function fomulario()
    {
        echo 'Fomulario de login';
    }

    
}
