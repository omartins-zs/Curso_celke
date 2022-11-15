<?php
// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}

echo "<h1>Listar dados da pagina Home</h1>";

extract($this->dados['sts_homes']);

echo "<b>ID:</b> " . $id . "<br>";
echo "<b>Titulo topo:</b> " . $title_topo . "<br>";
echo "<b>Descrição:</b> " . $description_topo . "<br>";
