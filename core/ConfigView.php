<?php

namespace Core;

// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}
class ConfigView
{

    private string $nome;
    private array $dados;

    public function __construct($nome, array $dados)
    {
        $this->nome = $nome;
        $this->dados = $dados;
    }

    public function renderizar()
    {
        if (file_exists('app/' . $this->nome . '.php')) {
            include 'app/sts/Views/include/cabecalho.php';
            include 'app/' . $this->nome . '.php';
            include 'app/sts/Views/include/rodape.php';
        } else {
            echo "Página não encontrada: {$this->nome}<br>";
            die("Página não encontrada!");
        }
    }
}
