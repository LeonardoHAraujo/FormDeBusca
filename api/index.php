<?php

require 'vendor/autoload.php';
$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c = new \Slim\Container($configuration);
$app = new \Slim\App($c);

// Define app routes

// Rota responsável por trazer todos os dados do banco.
$app->get('/', function ($req, $res) {
    require 'filmes.php';
    
    $dados = new Films();
    return $res->withJson($dados->getFilms());
});

// Rota responsável por trazer dados específicos do banco.
$app->post('/{search}', function ($req, $res) {
    require 'filmes.php';

    $data = $req->getAttribute('search');

    $dados = new Films();
    return $res->withJson($dados->postFilms($data));
});

// Run app
$app->run();