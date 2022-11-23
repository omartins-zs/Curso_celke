<?php

namespace App\sts\Controllers;

// Exemplo antiga versão nao deu certo
if (!defined('48b5ts')) {
    // Redirecionando para a Raiz do projeto
    header("Location: /");
    die("Erro: Página não encontrada!");
}
?>
<div class="jumbotron footer-per">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4">
                <h5>Celke</h5>
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
                <h5>Contato</h5>
                <ul class="list-unstyled">
                    <ul class="list-unstyled">
                        <li>
                            <a href="tel: XXXXXXXXXXX" class="link-footer">(XX) XXXXX-XXXX</a>
                        </li>
                        <li>
                            <a href="<?= URL; ?>contato" class="link-footer">Av. Winston Churchill</a>
                        </li>
                        <li>
                            <a href="<?= URL; ?>contato" class="link-footer">CNPJ: XX.XXX.XXX/XXXX-XX</a>
                        </li>
                    </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-4">
                <h5>Redes Sociais</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="https://www.instagram.com/celkecursos" target="_blank" class="link-footer">Instagram</a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/celkecursos/" target="_blank" class="link-footer">Facebook</a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UC5ClMRHFl8o_MAaO4w7ZYug" target="_blank" class="link-footer">Youtube</a>
                    </li>
                    <li>
                        <a href="https://twitter.com/celkecursos" target="_blank" class="link-footer">Twiter</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>