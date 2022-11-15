<?php
// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}

echo "View da pagina sobre empresa" . "<br>";


foreach ($this->dados['sts_sobres_empresas'] as $sobre_emp) {
    // 1°Exemplo para visualizar os dados
    var_dump($sobre_emp);
    echo "ID: " . $sobre_emp['id'] . "<br>";

    // 2°Exemplo para visualizar os dados
    extract($sobre_emp);
    echo "ID: " . $id . "<br>";
}
