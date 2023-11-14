<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Stats extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request,$valor)
    {
        echo 'Estado: '.$valor;
    }
}
