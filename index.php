
<?php
// Iniciando a Session 
session_start();

// Limpar o Buffer de saida(Para não ter erro de redirecionamento)
ob_start();

//Constante que define que o usuário está acessando páginas internas através da página "index.php".
define('48b5ts', true);

//Carregar o Composer
require './vendor/autoload.php';

//Atribuir apelido "Home" para rota da classe "Core\ConfigController"

use Core\ConfigController as Home;
//Instanciar a classe utilizando o apelido "Home".

$url = new Home();
//Instanciar o método
$url->carregar();
