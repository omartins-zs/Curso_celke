<?php

namespace App\sts\Controllers;

// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}
/**
 * Controller da página SobreEmpresa
 *
 * @author Gabriel Martins
 */
class SobreEmpresa
{
    /** @var array $dados Recebe os dados que devem ser enviados para VIEW */
    private array $dados;

    /**
     * Instanciar a MODELS e receber o retorno
     * Instantiar a classe responsável em carregar a View e enviar os dados para View.
     * 
     * @return void
     */
    public function index()
    {

        $list = new \App\sts\Models\StsSobreEmpresa();
        $this->dados['sts_sobres_empresas'] = $list->index();

        $carregarView =  new \Core\ConfigView("/sts/Views/sobreEmpresa/sobreEmpresa", $this->dados);
        $carregarView->renderizar();
    }
}
