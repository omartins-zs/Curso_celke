<?php

namespace App\sts\Controllers;

// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * Controller da página Erro
 *
 * @author Gabriel Martins
 */
class Erro
{
    /** @var array $dados Recebe os dados que devem ser enviados para VIEW */
    private array $dados;

    /**
     * Instantiar a classe responsável em carregar a View
     * 
     * @return void
     */
    public function index()
    {
        $this->dados = [];
        $carregarView =  new \Core\ConfigView("/sts/Views/erro/erro", $this->dados);
        $carregarView->renderizar();
    }
}
