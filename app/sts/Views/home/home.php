<?php
// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}

//Ler o registro da página home retornado do banco de dados
//A função extract é utilizado para extrair o array e imprimir através do nome da chave
extract($this->dados['sts_homes']);

$imagem_topo = URL . "app/sts/assets/images/home_topo/" . $image;
?>

<div class="jumbotron descr-top" style="background-image: url('<?php echo $imagem_topo; ?>');">
    <div class="container text-center">
        <h1 class="display-4"><?php echo $title_top; ?></h1>
        <p class="lead"><?php echo $description_top; ?></p>
        <a class="btn btn-primary btn-lg" href="<?php echo $link_btn_top; ?>" role="button"><?php echo $txt_btn_top; ?></a>
    </div>
</div>