<?php

namespace App\sts\Controllers;

// Exemplo antiga versão nao deu certo
if (!defined('URL')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class Erro
{
    public function index()
    {
        echo "Pagina de Erro<br>";
    }
}
