<?php
// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}

// 1° Visualização
var_dump($this->dados);

echo "<br>";

echo "ID: " . $this->dados['sts_homes']['id'] . "<br>";

// 2° Visualizaçao

extract($this->dados['sts_homes']);

echo "<b>ID:</b> " . $id . "<br>";
echo "<b>Titulo topo:</b> " . $title_topo . "<br>";
echo "<b>Descrição:</b> " . $description_topo . "<br>";
