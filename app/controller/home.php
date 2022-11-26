<?php

namespace app\controller;

class home
{
    public function testando()
    {
        $nomes = [
            'nome1' => 'alexandre',
            'nome2' => 'Mariana'
        ];

        $cidades = [
            'curitiba' => 'curitina',
            'porto alegre' => 'porto alegre'
        ];
        // return $nomes;
        return $cidades;
    }
}
