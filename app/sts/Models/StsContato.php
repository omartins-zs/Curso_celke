<?php

namespace App\sts\Models;

// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * Description of StsContato
 *
 * @author Gabriel Martins
 */
class StsContato
{
    private array $data;

    public function create(array $data): bool
    {
        $this->data = $data;
        //var_dump($this->data);

        $_SESSION['msg'] = "Mensagem enviada com sucesso!";
        return true;
    }
}
