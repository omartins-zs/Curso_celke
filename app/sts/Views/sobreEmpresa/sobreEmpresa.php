<?php
// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}

echo "<h1>Listar sobre empresa</h1>";

foreach ($this->dados['sts_sobres_empresas'] as $sobre_emp) {
    extract($sobre_emp);
    echo "ID: " . $id . "<br>";
    echo "ID: " . $title . "<br>";
    echo "ID: " . $description . "<br>";
    echo "ID: " . $image . "<br><hr>";
}