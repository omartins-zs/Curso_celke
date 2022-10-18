<?php

namespace App\sts\Controllers;

// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class Home
{
    private array $dados;

    public function index()
    {
        $home = new \App\sts\Models\StsHome();
        $home->index();

        $this->dados = [];
        $carregarView =  new \Core\ConfigView("/sts/Views/home/home", $this->dados);
        $carregarView->renderizar();
    }
}
