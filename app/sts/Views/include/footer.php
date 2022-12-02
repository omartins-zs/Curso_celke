<?php

namespace App\sts\Controllers;

// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}
extract($this->dados['footer']);
?>
<div class="jumbotron footer-per">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4">
                <h5><?= $title_site; ?></h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="<?= URL; ?>" class="link-footer">Home</a>
                    </li>
                    <li>
                        <a href="<?= URL; ?>sobre-empresa" class="link-footer">Sobre Empresa</a>
                    </li>
                    <li>
                        <a href="<?= URL; ?>contato" class="link-footer">Contato</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-4">
                <h5><?= $title_contact; ?></h5>
                <ul class="list-unstyled">
                    <ul class="list-unstyled">
                        <li>
                            <a href="tel: <?= $phone; ?>" class="link-footer"><?= $phone; ?></a>
                        </li>
                        <li>
                            <a href="<?= $url_address; ?>" class="link-footer"><?= $address; ?></a>
                        </li>
                        <li>
                            <a href="<?= $url_cnpj; ?>" class="link-footer"><?= $cnpj; ?></a>
                        </li>
                    </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-4">
                <h5><?= $title_social_networks; ?></h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="<?= $link_one_social_networks; ?>" target="_blank" class="link-footer"><?= $txt_one_social_networks; ?></a>
                    </li>
                    <li>
                        <a href="<?= $link_two_social_networks; ?>" target="_blank" class="link-footer"><?= $txt_two_social_networks; ?></a>
                    </li>
                    <li>
                        <a href="<?= $link_three_social_networks; ?>" target="_blank" class="link-footer"><?= $txt_three_social_networks; ?></a>
                    </li>
                    <li>
                        <a href="<?= $link_four_social_networks; ?>" target="_blank" class="link-footer"><?= $txt_four_social_networks; ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
