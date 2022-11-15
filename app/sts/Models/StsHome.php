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
    private array $data;

    public function index()
    {
        $viewHome = new \App\sts\Models\helper\StsRead();
        // $listSobreEmpresa->exeRead("sts_sobres_empresas", "WHERE sts_situation_id =:sts_situation_id LIMIT :limit", "sts_situation_id=1&limit=5");
        $viewHome->fullRead("SELECT id, title_topo, description_topo
        FROM sts_homes
        LIMIT :limit", "limit=1");
        $this->data = $viewHome->getResult();
        return $this->data[0];
    }
}
