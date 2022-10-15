
<?php
// Iniciando a Session 
session_start();

// Limpar o Buffer de saida(Para não ter erro de redirecionamento)
ob_start();

define('48b5ts', true);


require './vendor/autoload.php';

use Core\ConfigController as Home;

$url = new Home();
$url->carregar();
