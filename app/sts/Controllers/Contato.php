<?php

namespace App\sts\Controllers;

// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class Contato
{
    private array $dados;

    public function index()
    {
        $this->dados = [];
        $carregarView =  new \Core\ConfigView("/sts/Views/contato/contato", $this->dados);
        $carregarView->renderizar();
    }
}
