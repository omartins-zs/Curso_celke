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
?>
<div class="jumbotron head-contato">
    <div class="container">
        <h1 class="text-center">Contato</h1>
    </div>            
</div>

<div class="jumbotron contato">
    <div class="container">
        <div class="row featurette">
            <div class="col-md-6 mb-4">
                <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
                <form>
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Nome completo" required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Seu melhor e-mail" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Assunto</label>
                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Assunto da mensagem" required>
                    </div>

                    <div class="form-group">
                        <label for="content">Mensagem</label>
                        <textarea name="content" class="form-control" id="content" rows="3" placeholder="Conteúdo da mensagem" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <?php
                extract($this->dados['address']);
            ?>
            <div class="col-md-6">
                <h3><?= $title_opening_hours; ?></h3>
                <p class="lead"><?= $opening_hours; ?></p>
                <hr>
                <address>
                    <strong><?= $title_address; ?></strong><br>
                    <?= $address; ?><br>
                    <?= $address_two; ?><br>
                    <?= $phone; ?><br>
                </address>
            </div>
        </div>
    </div>            
</div>

<form method="POST" action="">
    <label>Nome</label>
    <input name="name" type="text" placeholder="Nome completo" value="<?php if (isset($name)) { echo $name;}
    ?>"><br><br>

    <label>E-mail</label>
    <input name="email" type="email" placeholder="Seu melhor e-mail" value="<?php if (isset($email)) { echo $email;}
    ?>"><br><br>

    <label>Assunto</label>
    <input name="subject" type="text" placeholder="Assunto da mensagem" value="<?php if (isset($subject)) { echo $subject;}
    ?>"><br><br>

    <label>Mensagem</label>
    <textarea name="content" rows="6"><?php if (isset($content)) { echo $content;}?> </textarea>

    <input name="CreatContMsg" type="submit" value="Enviar">

</form>
