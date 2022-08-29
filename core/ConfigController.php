<?php

namespace Core;

class ConfigController
{

    // private string $url;
    // private array $urlConjunto;
    // private string $urlController;
    // private string $urlParametro;
    // private string $urlSlugController;
    // private array $format;

    public function __construct()
    {
        if (!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))) {
            $this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
            echo "URL: {$this->url} <br>";
            echo "<br>";
            $this->limparUrl();
            echo "URL Limpa:  {$this->url} <br>";
            echo "<br>";

            $this->urlConjunto = explode("/", $this->url);
            var_dump($this->urlConjunto);
            echo "<br> <br>";
            if (isset($this->urlConjunto[0])) {
                $this->urlController = $this->slugController($this->urlConjunto[0]);
            } else {
                $this->urlController = "Home";
            }
            if (isset($this->urlConjunto[1])) {
                $this->urlParamentro = $this->urlConjunto[1];
            } else {
                $this->urlParamentro = "";
            }
        } else {
            $this->urlController = "Home";
            $this->urlParamentro = "";
        }

        echo "Controller: {$this->urlController} - Parametro: {$this->urlParamentro}<br>";
        echo "<br>";
    }

    private function limparUrl()
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

    public function carregar()
    {
        // Carrega estatico
        $classeCarregar = new \App\sts\Controllers\SobreEmpresa();
        echo "Carregando controller Estaticamente<br><hr>";


        // Carrega Dinamicamente
        echo "Controller no metodo carregar:"  . $this->urlController . "<br>";
        $classe = "\\App\\sts\\Controllers\\" . $this->urlController;

        echo "Caminho da classe : " . $classe . "<br>";
        echo "Carregando controller Dinamicamente<br>";

        $classeCarregar = new $classe();
        $classeCarregar->index();
    }
}
