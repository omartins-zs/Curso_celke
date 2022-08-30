<?php

namespace App\sts\Controllers;

// Exemplo antiga versão nao deu certo
if (!defined('URL')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class SobreEmpresa
{
    public function index()
    {
        echo "Pagina Sobre Empresa!!<br>";
    }
}
