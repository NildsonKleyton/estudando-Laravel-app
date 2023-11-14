<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pessoas extends Controller
{
    private $pessoas = [
        [
            'nome' => 'Nildson',
            'email' => 'nildson@teste'
        ],
        [
            'nome' => 'Kleyton',
            'email' => 'kleyton@teste'
        ],
        [
            'nome' => 'Heitor',
            'email' => 'heitor@teste'
        ]
    ];

    public function pessoas($index)
    {
        if ($index >= 0 && $index < count($this->pessoas)) {
            echo 'Nome: ' . $this->pessoas[$index]['nome'] . '<br>';
            echo 'Email: ' . $this->pessoas[$index]['email'] . '<br>';
        } else if (!is_numeric($index)) {
            echo 'index é uma string.';
        } else {
            echo 'index invalido, Pessoa não existe.';
        }
    }

    public function dados($dado, $index = 0){
        echo $this->pessoas[$index][$dado];
    }
}
