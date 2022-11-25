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

<div class="jumbotron descr-serv">
    <div class="container text-center">
        <h2 class="display-4">Serviços</h2>
        <p class="lead pb-4">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>

        <div class="row">
            <div class="col-lg-4">
                <div class="rounded-circle circulo centralizar border border-info shadow">
                    <i class="fas fa-ship"></i>
                </div>
                <h2 class="mt-4 mb-4">Serviço um</h2>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur non ultricies mi, sit amet laoreet diam.</p>
            </div>
            <div class="col-lg-4">
                <div class="rounded-circle circulo centralizar border border-info shadow">
                    <i class="fas fa-map-marked-alt"></i>
                </div>
                <h2 class="mt-4 mb-4">Serviço dois</h2>
                <p>Quisque ut interdum nunc. Pellentesque metus neque, convallis sed vestibulum eu, viverra et justo. In laoreet diam nec nisl consectetur auctor.</p>
            </div>
            <div class="col-lg-4">
                <div class="rounded-circle circulo centralizar border border-info shadow">
                    <i class="fas fa-snowplow"></i>
                </div>
                <h2 class="mt-4 mb-4">Serviço três</h2>
                <p>Donec porttitor metus a arcu pulvinar ultricies. Aliquam commodo fermentum sapien quis porta. Nunc ac hendrerit libero, vel aliquam mauris.</p>
            </div>
        </div>
    </div>
</div>