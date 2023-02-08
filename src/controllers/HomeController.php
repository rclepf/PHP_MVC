<?php
namespace src\controllers;

use \core\Controller;


class HomeController extends Controller
{

    public function index()
    {
        $posts = [
            ['titulo' => 'Titulo de Teste 1', 'corpo' => 'Corpo de Teste 1'],
            ['titulo' => 'Titulo de Teste 2', 'corpo' => 'Corpo de Teste 2'],
            ['titulo' => 'Titulo de Teste 3', 'corpo' => 'Corpo de Teste 3'],
            ['titulo' => 'Titulo de Teste 4', 'corpo' => 'Corpo de Teste 4'],
            ['titulo' => 'Titulo de Teste 5', 'corpo' => 'Corpo de Teste 5'],
            ['titulo' => 'Titulo de Teste 6', 'corpo' => 'Corpo de Teste 6'],
        ];

        $nome = 'Rodolfo';

        $this->render('home', [
            'nome' => $nome,
            'idade' => 33,
            'posts' => $posts,
        ]);
    }

    public function fotos()
    {
        $this->render('fotos');
    }
    public function foto($parametros)
    {
        echo "Acessando a foto: " . $parametros['id'];
    }

    public function sobre()
    {
        $this->render('sobre');
    }

    public function sobreP($args)
    {
        print_r($args);
    }

}