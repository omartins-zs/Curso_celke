<?php

namespace App\sts\Controllers;

// Exemplo antiga versão nao deu certo
if (!defined('URL')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class Contato
{
    public function index()
    {
        echo '<pre>';
        print_r($_SERVER);
        echo "Pagina de Contato<br>";
    }
}
