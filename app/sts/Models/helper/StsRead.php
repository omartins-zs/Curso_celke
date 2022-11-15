<?php


namespace App\sts\Models\helper;

use PDO;
// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class StsRead extends StsConn
{
    private string $select;
    private array $values = [];
    private array $result = [];
    private object $query;
    private object $conn;

    function getResult(): array
    {
        return $this->result;
    }

    public function exeRead($tabela, $termos = null, $parseString = null)
    {
        echo $parseString . "<br>";
        if (!empty($parseString)) {
            parse_str($parseString, $this->values);
            var_dump($this->values);
        }
        $this->select = "SELECT * FROM {$tabela} {$termos}";
        echo "Read <br>";
        $this->exeIntruction();
        var_dump($this->query);
    }
    public function fullRead($query, $parseString = null)
    {
        $this->select = $query;
        if (!empty($parseString)) {
            parse_str($parseString, $this->values);
        }
        $this->exeIntruction();
    }

    private function exeIntruction()
    {
        $this->connection();
        try {
            $this->exeParameter();
            $this->query->execute();
            $this->result = $this->query->fetchAll();
        } catch (Exception $ex) {
            $this->result = null;
        }
    }

    private function connection()
    {
        $this->conn = $this->connect();
        $this->query = $this->conn->prepare($this->select);
        $this->query->setFetchMode(PDO::FETCH_ASSOC);
    }

    private function exeParameter()
    {
        if ($this->values) {
            foreach ($this->values as $link => $value) {
                if ($link == 'limit' || $link == 'offset') {
                    $value = (int) $value;
                }
                $this->query->bindValue(":{$link}", $value, (is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR));
            }
        }
    }
}
