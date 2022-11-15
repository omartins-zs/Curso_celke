<?php
// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}

echo "<h1>Listar sobre empresa</h1>";

//Ler o array de registro sobre empresa retornado do banco de dados
foreach ($this->dados['sts_sobres_empresas'] as $sobre_emp) {
    //A função extract é utilizado para extrair o array e imprimir através do nome da chave
    extract($sobre_emp);
    echo "ID: " . $id . "<br>";
    echo "Title: " . $title . "<br>";
    echo "Description: " . $description . "<br>";
    echo "Image: " . $image . "<br><hr>";
}
