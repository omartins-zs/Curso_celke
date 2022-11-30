<?php
// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}

//Ler o registro da página home retornado do banco de dados
//A função extract é utilizado para extrair o array e imprimir através do nome da chave
extract($this->dados['sts_homes']['top']);

$imagem_topo = URL . "app/sts/assets/images/home_topo/" . $image;
?>

<div class="jumbotron descr-top" style="background-image: url('<?= $imagem_topo; ?>');">
    <div class="container text-center">
        <h1 class="display-4"><?= $title_top; ?></h1>
        <p class="lead"><?= $description_top; ?></p>
        <a class="btn btn-primary btn-lg" href="<?= $link_btn_top; ?>" role="button"><?= $txt_btn_top; ?></a>
    </div>
</div>

<?php
extract($this->dados['sts_homes']['serv']);
?>
<div class="jumbotron descr-serv">
    <div class="container text-center">
        <h2 class="display-4"><?= $title_serv; ?></h2>
        <p class="lead pb-4"><?= $description_serv; ?></p>

        <div class="row">
            <div class="col-lg-4">
                <div class="rounded-circle circulo centralizar border border-info shadow">
                    <i class="<?= $icone_um_serv; ?>"></i>
                </div>
                <h2 class="mt-4 mb-4"><?= $titulo_um_serv; ?></h2>
                <p><?= $description_um_serv; ?></p>
            </div>
            <div class="col-lg-4">
                <div class="rounded-circle circulo centralizar border border-info shadow">
                    <i class="<?= $icone_dois_serv; ?>"></i>
                </div>
                <h2 class="mt-4 mb-4"><?= $titulo_dois_serv; ?></h2>
                <p><?= $description_dois_serv; ?></p>
            </div>
            <div class="col-lg-4">
                <div class="rounded-circle circulo centralizar border border-info shadow">
                    <i class="<?= $icone_tres_serv; ?>"></i>
                </div>
                <h2 class="mt-4 mb-4"><?= $titulo_tres_serv; ?></h2>
                <p><?= $description_tres_serv; ?></p>
            </div>
        </div>
    </div>
</div>

<?php
extract($this->dados['sts_homes']['action']);

$imagem_action = URL . "app/sts/assets/images/home_action/" . $image;
?>

<div class="jumbotron descr-action" style="background-image: url('<?=$imagem_action; ?>');">
    <div class="container text-center">
        <h4 class="lead mb-4"><?=$title_action; ?></h4>
        <h2 class="display-4 mb-4"><?=$subtitle_action; ?></h2>
        <p class="lead mb-4"><?=$description_action; ?></p>
        <a class="btn btn-primary btn-lg" href="<?=$link_btn_action; ?>" role="button"><?=$txt_btn_action; ?></a>
    </div>
</div>