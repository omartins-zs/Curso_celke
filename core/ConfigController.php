<?php

namespace Core;

// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * Receber a URL e manipular.
 * Carregar a CONTROLLER
 *
 * @author Gabriel Martins
 */
class ConfigController extends Config
{
    /** @var string $url Recebe a URL do .htaccess */
    private string $url;
    /** @var array $urlConjunto Recebe o URL convertida para array */
    private array $urlConjunto;
    /** @var string $urlController Recebe da URL o nome da controller */
    private string $urlController;
    /** @var string $urlParamentro Recebe da URL o parâmetro */
    private string $urlParametro;
    /** @var string $urlSlugController Recebe a controller convertida para o formato do nome da classe */
    private string $urlSlugController;
    /** @var array $format Recebe o array de caracteres especiais que devem ser substituido */
    private array $format;


    /**
     * Receber a URL do .htaccess.
     * Validar a URL.
     */
    public function __construct()
    {
        $this->config();
        if (!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))) {
            $this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
            $this->limparUrl();
            $this->urlConjunto = explode("/", $this->url);
            if (isset($this->urlConjunto[0])) {
                $this->urlController = $this->slugController($this->urlConjunto[0]);
            } else {
                $this->urlController = CONTROLLER;
            }
            if (isset($this->urlConjunto[1])) {
                $this->urlParamentro = $this->urlConjunto[1];
            } else {
                $this->urlParamentro = "";
            }
        } else {
            $this->urlController = CONTROLLER;
            $this->urlParamentro = "";
        }
    }

    /**
     * Limpar a a URL, elimando as TAG, os espaços em brancos, retirar a barra no final da URL e retirar os caracteres especiais
     * 
     * @return void
     */
    private function limparUrl(): void
    {
        // Eliminar as tags
        $this->url = strip_tags($this->url);
        // Eliminar os espaços em branco
        $this->url = trim($this->url);
        // Eliminar a Barra no final da URL
        $this->url = rtrim($this->url, "/");

        // Exemplo: na url escrito como-criar-função
        $this->format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]?;:.,\\\'<>°ºª ';
        $this->format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr--------------------------------';

        $this->url = strtr(utf8_decode($this->url), utf8_decode($this->format['a']), $this->format['b']);
    }

    /**
     * Converter o valor obtido da URL "sobre-empresa" e converter no formato da classe "SobreEmpresa".
     * Utilizado as funções para converter tudo para minúsculo, converter o traço pelo espaço, converter cada letra da primeira palavra para maiúsculo, retirar os espaços em branco
     * @param string $slugController Nome da classe
     * @return string Retorna a controller "sobre-empresa" convertido para o nome da Classe "SobreEmpresa"
     */
    private function slugController($slugController)
    {
        // Exemplo na url escrito: sobre-Empresa

        //Converter para minusculo
        $this->urlSlugController = strtolower($slugController);
        //Converter o traço para espaço em branco
        $this->urlSlugController = str_replace("-", " ", $this->urlSlugController);
        //Converter a primeira letra de cada palavra para maiusculo
        $this->urlSlugController = ucwords($this->urlSlugController);
        //Retirar o espaço em braco
        $this->urlSlugController = str_replace(" ", "", $this->urlSlugController);
        return $this->urlSlugController;
    }

    /**   
     * Carregar as Controllers.
     * Instanciar as classes da controller e carregar o método index.
     * 
     * @return void
     */
    public function carregar(): void
    {
        // Carrega Dinamicamente
        $classe = "\\App\\sts\\Controllers\\" . $this->urlController;
        $classeCarregar = new $classe();
        $classeCarregar->index();
    }
}
