<?php


namespace App\sts\Models\helper;

use PDO;
// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}

abstract class StsConn
{

    private string $host = HOST;
    private string $user = USER;
    private string $password = PASSWORD;
    private string $dbName = DBNAME;
    // private int $port = PORT;
    // private object $connect;


    protected function connect()
    {
        try {
            $this->connect = new PDO("mysql:host={$this->host};dbname=" . $this->dbName, $this->user, $this->password);
            return $this->connect;
        } catch (Exception $ex) {
            die('Erro: Por favor tente novamente. Caso o problema persista entre em contato com o o administrador' . EMAILADM . '<br>');
        }
    }
}
