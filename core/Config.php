<?php

namespace Core;

if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}


/**
 * Configurações básicas do site.
 *
 * @author Gabriel Martins
 */
abstract class Config
// Abstrata e Protected somenta a classe filha poide instanciar
{

    /**
     * Possui as constantes com as configurações.
     * Configurações de endereço do projeto.
     * Página principal do projeto.
     * Credenciais de acesso ao banco de dados
     * E-mail do administrador.
     * 
     * @return void
     */
    protected function config(): void
    {
        // Definindo base url
        define('URL', 'http://localhost/celke/');

        // Definindo base url de admnistrador
        define('URLADM', 'http://localhost/celke/adm/');

        // Definindo controller Padrao(Ex:Routes do Codeigniter)
        define('CONTROLLER', 'Home');
        define('METODO', 'INDEX');

        // Credenciais de Acesso do Banco de dados
        define('HOST', 'localhost');
        define('USER', 'root');
        define('PASSWORD', '');
        define('DBNAME', 'celke');
        define('EMAILADM', 'gabrielmartinsdev@gmail.com');
        // define('PORT', 3308);

    }
}
