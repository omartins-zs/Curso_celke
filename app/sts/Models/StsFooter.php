<?php

namespace App\sts\Models;

// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * Cadastrar nova mensagem no banco de dados
 *
 * @author Gabriel Martins
 */
class StsFooter
{

    /** @var array $dataContact Recebe os dados que são retornado do BD */
    private array $dataFooter;

    public function view()
    {
        $viewFooter = new \App\sts\Models\helper\StsRead();
        $viewFooter->fullRead("SELECT title_site, title_contact, phone, address, url_address, cnpj, url_cnpj, title_social_networks, txt_one_social_networks, link_one_social_networks, txt_two_social_networks, link_two_social_networks, txt_three_social_networks, link_three_social_networks, txt_four_social_networks, link_four_social_networks
                FROM sts_footers
                LIMIT :limit", "limit=1");
        $this->dataFooter = $viewFooter->getResult();
        return $this->dataFooter[0];
    }
}
