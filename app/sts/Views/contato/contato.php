<?php
// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}

if (isset($this->dados['form'])) {
    $valueForm = $this->dados['form'];
    extract($valueForm);
}

echo "<h1>Entre em Contato!</h1>";

if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

?>

<form method="POST" action="">
    <label>Nome</label>
    <input type="text" name="name" placeholder="Digite o seu nome completo" value="<?php if(isset($name)) { echo $name; } ?>"><br><br>

    <label>Email</label>

    <input type="email" name="email" placeholder="Digite o seu email"value="<?php if(isset($email)) { echo $email; } ?>"><br><br>
  
    <label>Assunto</label>
    <input type="text" name="subject" placeholder="Qual será o assunto" value="<?php if(isset($subject)) { echo $subject; } ?>"><br><br>

    <label>Mensagem</label>
    <textarea name="content" rows="6" placeholder="Digite a mensagem"><?php if(isset($content)) { echo $content; } ?></textarea>

    <input type="submit" name="CreatContMsg" value="Enviar">
</form>