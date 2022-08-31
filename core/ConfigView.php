<?php

namespace Core;

class ConfigView
{

    private string $nome;
    private array $dados;

    public function __construct($nome, array $dados)
    {
        $this->nome = $nome;
        $this->dados = $dados;
        echo 'Carregar a view: ' .   $this->nome . '<br>';
    }

    public function renderizar()
    {
        if (file_exists('app/' . $this->nome . '.php')) {
            include 'app/' . $this->nome . '.php';
        } else {
            echo "Pagina não encontrada!!!";
            echo ("Pagina não encontrada: {$this->nome}<br>");
            die("Pagina não encontrada!!!");
        }
    }
}
