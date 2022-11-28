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
    /** @var array $dataTop Recebe os registros do banco de dados relacionado ao topo */
    private array $dataTop;
    /** @var array $dataServ Recebe os registros do banco de dados relacionado aos serviços */
    private array $dataServ;

    /**
     * Instancia a classe genérica no helper responsável em buscar os registro no banco de dados.
     * Possui a QUERY responsável em buscar os registros no BD.
     * @return array Retorna o registro do banco de dados com informações para página Home
     */
    public function index(): array
    {
        $this->viewTop();
        $this->viewServ();
        return $this->data;
    }

    private function viewTop()
    {
        $viewHome = new \App\sts\Models\helper\StsRead();
        $viewHome->fullRead("SELECT id, title_top, description_top, link_btn_top, txt_btn_top, image
                    FROM sts_homes_tops
                    LIMIT :limit", "limit=1");
        $this->dataTop = $viewHome->getResult();
        $this->data['top'] = $this->dataTop[0];
    }

    private function viewServ()
    {
        $viewServ = new \App\sts\Models\helper\StsRead();
        $viewServ->fullRead("SELECT id, title_serv, description_serv, icone_um_serv, titulo_um_serv, description_um_serv, icone_dois_serv, titulo_dois_serv, description_dois_serv, icone_tres_serv, titulo_tres_serv, description_tres_serv
                    FROM sts_homes_servs
                    LIMIT :limit", "limit=1");
        $this->dataServ = $viewServ->getResult();
        $this->data['serv'] = $this->dataServ[0];
    }
}
