<?php


namespace App\sts\Models\helper;

use PDO;

// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}
/**
 * Conexão com o banco de dados
 *
 * @author Gabriel Martins
 */
abstract class StsConn
// Classe abstrata ninguem instancia apenas herda
{

    /** @var string $host Recebe o host da constante HOST */
    private string $host = HOST;
    /** @var string $user Recebe o usuário da constante USER */
    private string $user = USER;
    /** @var string $pass Recebe a senha da constante PASS */
    private string $pass = PASS;
    /** @var string $dbName Recebe a base de dados da constante DBNAME */
    private string $dbName = DBNAME;
    /** @var int $port Recebe a porta da constante PORT */
    private int $port = PORT;
    /** @var object $connect Recebe a conexão com o banco de dados */
    private object $connect;

    /**
     * Realiza a conexão com o banco de dados.
     * @return object retorna a conexão com o banco de dados
     */
    protected function connect(): object
    // Metodo Private só a propia classe
    // Metodo protected so a classe filha consegue usar
    {
        try {
            $this->connect = new PDO("mysql:host={$this->host};dbname=" . $this->dbName, $this->user, $this->password);
            return $this->connect;
        } catch (Exception $ex) {
            die('Erro: Por favor tente novamente. Caso o problema persista entre em contato com o o administrador' . EMAILADM . '<br>');
        }
    }
}
