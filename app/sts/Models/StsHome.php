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
    // private array $connection;

    public function index()
    {
        $connection = new \App\sts\Models\helper\StsConn();
        $this->connection = $connection->connect();

        // testando e vericando conexão
        var_dump($this->connection);
    }
}
