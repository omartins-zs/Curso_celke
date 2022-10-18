<?php

namespace App\sts\Controllers;

// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class SobreEmpresa
{
    private array $dados;

    public function index()
    {

        $list = new \App\sts\Models\StsSobreEmpresa();
        $list->index();

        $this->dados = [];
        $carregarView =  new \Core\ConfigView("/sts/Views/sobreEmpresa/sobreEmpresa", $this->dados);
        $carregarView->renderizar();
    }
}
