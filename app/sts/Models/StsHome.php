<?php

namespace App\sts\Models;

// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}
/**
 * Models responsável em buscar os dados da página home
 *
 * @author Gabriel Martins
 */
class StsHome
{
    /** @var array $data Recebe os registros do banco de dados */
    private array $data;

    /**
     * Instancia a classe genérica no helper responsável em buscar os registro no banco de dados.
     * Possui a QUERY responsável em buscar os registros no BD.
     * @return array Retorna o registro do banco de dados com informações para página Home
     */
    public function index(): array
    {
        $viewHome = new \App\sts\Models\helper\StsRead();
        $viewHome->fullRead("SELECT id, title_top, description_top, link_btn_top, txt_btn_top, image
              FROM sts_homes_tops
              LIMIT :limit", "limit=1");
        $this->data = $viewHome->getResult();
        return $this->data[0];
    }
}
