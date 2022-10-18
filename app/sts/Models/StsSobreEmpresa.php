<?php

namespace App\sts\Models;

// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}

use PDO;

class StsSobreEmpresa
{
    // private array $connection;

    public function index()
    {
        // Se for usar o BindParam declara aqui a varivel sts e limit e passar vaarivel no lugar do valor direto
        $sts_situation_id = 1;
        $limit = 5;

        $connection = new \App\sts\Models\helper\StsConn();
        $this->connection = $connection->connect();

        $query = "SELECT id,title,description,image FROM sts_sobres_empresas WHERE sts_situation_id=:sts_situation_id LIMIT :limit";

        $result_query = $this->connection->prepare($query);

        $result_query->bindValue(':sts_situation_id', 1, PDO::PARAM_INT);
        $result_query->bindParam(':limit', $limit, PDO::PARAM_INT);
        $result_query->execute();
        $result = $result_query->fetchAll();
        var_dump($result);
    }
}
