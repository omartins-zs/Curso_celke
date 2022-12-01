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
    /** @var array $data Recebe os dados que devem ser inseridos no BD */
    private array $data;
    /** @var array $dataContact Recebe os dados que são retornado do BD */
    private array $dataContact;

    /**
     * Cadastrar nova mensagem no banco de dados
     * 
     * @param array $data Recebe os dados que devem ser inseridos no BD
     * @return bool Retorna true quando o cadatro é realizado com sucesso e false quando houver erro
     */
    public function create(array $data): bool
    {
        $this->data = $data;
        $this->data['created'] = date("Y-m-d H:i:s");

        $createContactMsg = new \App\sts\Models\helper\StsCreate();
        $createContactMsg->exeCreate("sts_contacts_msgs", $this->data);

        if ($createContactMsg->getResult()) {
            $_SESSION['msg'] = "Mensagem enviada com sucesso!";
            return true;
        } else {
            $_SESSION['msg'] = "Mensagem não enviada com sucesso!";
            return false;
        }
    }

    public function view()
    {
        $viewContact = new \App\sts\Models\helper\StsRead();
        $viewContact->fullRead("SELECT title_opening_hours, opening_hours, title_address, address, address_two, phone
                FROM sts_contacts
                LIMIT :limit", "limit=1");
        $this->dataContact = $viewContact->getResult();
        return $this->dataContact[0];
    }
}
