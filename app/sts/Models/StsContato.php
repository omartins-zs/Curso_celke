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

        $createContactMsg = new \App\sts\Models\helper\StsCreate();
        $createContactMsg->exeCreate("sts_contacts_msgs", $this->data);

        $_SESSION['msg'] = "Mensagem enviada com sucesso!";
        return true;
    }
}
