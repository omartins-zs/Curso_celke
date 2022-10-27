<?php

namespace App\sts\Models;

// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class StsHome
{

    //private object $connection;

    public function index()
    {
        /*$connection = new \App\sts\Models\helper\StsConn();
        $this->connection = $connection->connect();
        var_dump($this->connection);*/
        echo "Models: Listar dados da página home!<br>";
    }
}
