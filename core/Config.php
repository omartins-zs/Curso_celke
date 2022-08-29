<?php

// Iniciando a Session 
session_start();

// Limpar o Buffer de saida(Para não ter erro de redirecionamento)
ob_start();

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
// define('PORT', 3308);
