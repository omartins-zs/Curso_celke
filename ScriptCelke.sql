CREATE DATABASE celke;

CREATE TABLE `celke`.`sts_sobres_empresas` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(220) NOT NULL,
    `description` TEXT NOT NULL,
    `image` VARCHAR(220) NOT NULL,
    `sts_situation_id` INT NOT NULL,
    `created` DATETIME NOT NULL,
    `modified` DATETIME NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO
    `sts_sobres_empresas` (
        `id`,
        `title`,
        `description`,
        `image`,
        `sts_situation_id`,
        `created`,
        `modified`
    )
VALUES
    (
        NULL,
        'Sobre empresa titulo 1',
        'sobre empresa conteudo 1',
        'sobre_empresa.jpg',
        '1',
        '2022-10-09 18:38:03',
        '2022-10-18 23:37:34.000000'
    ),
    (
        NULL,
        'Sobre empresa titulo 2',
        'sobre empresa conteudo 2',
        'sobre_empresa.jpg',
        '1',
        '2022-10-10 18:38:03',
        '2022-10-18 23:37:34.000000'
    ),
    (
        NULL,
        'Sobre empresa titulo 3',
        'sobre empresa conteudo 3',
        'sobre_empresa.jpg',
        '1',
        '2022-10-18 23:37:34.000000',
        '2022-10-18 23:37:34.000000'
    ),
    (
        NULL,
        'Sobre empresa titulo 4',
        'sobre empresa conteudo 4',
        'sobre_empresa.jpg',
        '1',
        '2022-10-13 18:38:03',
        '2022-10-18 23:37:34.000000'
    ) CREATE TABLE `celke`.`sts_homes` (
        `id` INT NOT NULL AUTO_INCREMENT,
        `title_topo` VARCHAR(220) NOT NULL,
        `description` VARCHAR(220) NOT NULL,
        `created` DATETIME NOT NULL,
        `modified` DATETIME NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;

INSERT INTO
    `sts_homes` (
        `id`,
        `title_topo`,
        `description`,
        `created`,
        `modified`
    )
VALUES
    (
        NULL,
        'Temos a solução que a sua empresa pesquisa',
        'Morbi porta ipsum lectus, a consequat urna laoreet ornare',
        '2022-11-15 23:17:43.000000',
        '2022-11-15 23:17:43.000000'
    )
ALTER TABLE
    `sts_homes` CHANGE `description` `description_topo` VARCHAR(220) CHARACTER
SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;

CREATE TABLE `celke`.`sts_contacts_msgs` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `subject` VARCHAR(220) NOT NULL,
    `content` TEXT NOT NULL,
    `created` DATETIME NOT NULL,
    `modified` DATETIME NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

RENAME TABLE `celke`.`sts_homes` TO `celke`.`sts_homes_tops`;

ALTER TABLE
    `sts_homes_tops`
ADD
    `link_btn_top` VARCHAR(100) NOT NULL
AFTER
    `modified`,
ADD
    `txt_btn_top` VARCHAR(40) NOT NULL
AFTER
    `link_btn_top`;

UPDATE
    `sts_homes_tops`
SET
    `link_btn_top` = 'http://localhost/celke/contato'
WHERE
    `sts_homes_tops`.`id` = 1;

UPDATE
    `sts_homes_tops`
SET
    `txt_btn_top` = 'Contato'
WHERE
    `sts_homes_tops`.`id` = 1;

ALTER TABLE
    `sts_homes_tops` CHANGE `title_topo` `title_top` VARCHAR(220) CHARACTER
SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;

ALTER TABLE
    `sts_homes_tops` CHANGE `description_topo` `description_top` VARCHAR(220) CHARACTER
SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;

ALTER TABLE
    `sts_homes_tops`
ADD
    `image` VARCHAR(200) NOT NULL
AFTER
    `txt_btn_top`;

UPDATE
    `sts_homes_tops`
SET
    `image` = 'topo.jpg'
WHERE
    `sts_homes_tops`.`id` = 1;

ALTER TABLE
    `sts_homes_tops` CHANGE `link_btn_top` `link_btn_top` VARCHAR(100) CHARACTER
SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
AFTER
    `description_top`,
    CHANGE `txt_btn_top` `txt_btn_top` VARCHAR(40) CHARACTER
SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
AFTER
    `link_btn_top`,
    CHANGE `image` `image` VARCHAR(200) CHARACTER
SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
AFTER
    `txt_btn_top` CREATE TABLE `celke`.`sts_sobres_servs` (
        `id` INT NOT NULL AUTO_INCREMENT,
        `title_serv` VARCHAR(100) NOT NULL,
        `description_serv` VARCHAR(150) NOT NULL,
        `icone_um_serv` VARCHAR(44) NOT NULL,
        `titulo_um_serv` VARCHAR(44) NOT NULL,
        `description_um_serv` INT(150) NOT NULL,
        `icone_dois_serv` INT NOT NULL,
        `titulo_dois_serv` INT NOT NULL,
        `description_dois_serv` INT NOT NULL,
        `icone_tres_serv` INT NOT NULL,
        `titulo_tres_serv` INT NOT NULL,
        `description_tres_serv` INT NOT NULL,
        `created` DATETIME NOT NULL,
        `modified` DATETIME NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;

ALTER TABLE
    `sts_sobres_servs` CHANGE `description_um_serv` `description_um_serv` VARCHAR(150) NOT NULL,
    CHANGE `icone_dois_serv` `icone_dois_serv` VARCHAR(44) NOT NULL,
    CHANGE `titulo_dois_serv` `titulo_dois_serv` VARCHAR(150) NOT NULL,
    CHANGE `description_dois_serv` `description_dois_serv` VARCHAR(150) NOT NULL,
    CHANGE `icone_tres_serv` `icone_tres_serv` VARCHAR(44) NOT NULL,
    CHANGE `titulo_tres_serv` `titulo_tres_serv` VARCHAR(150) NOT NULL,
    CHANGE `description_tres_serv` `description_tres_serv` VARCHAR(150) NOT NULL;

INSERT INTO
    `sts_sobres_servs` (
        `id`,
        `title_serv`,
        `description_serv`,
        `icone_um_serv`,
        `titulo_um_serv`,
        `description_um_serv`,
        `icone_dois_serv`,
        `titulo_dois_serv`,
        `description_dois_serv`,
        `icone_tres_serv`,
        `titulo_tres_serv`,
        `description_tres_serv`,
        `created`,
        `modified`
    )
VALUES
    (
        NULL,
        'Serviços',
        'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.\r\n\r\n',
        'fa fa-ship',
        'Serviço um',
        'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur non ultricies mi, sit amet laoreet diam.',
        'fa fa-map-marked-alt',
        'Serviço dois',
        'Quisque ut interdum nunc. Pellentesque metus neque, convallis sed vestibulum eu, viverra et justo. In laoreet diam nec nisl consectetur auctor.',
        'fa fa-snowplow',
        'Serviço três\r\n',
        'Donec porttitor metus a arcu pulvinar ultricies. Aliquam commodo fermentum sapien quis porta. Nunc ac hendrerit libero, vel aliquam mauris.',
        '2022-11-28 02:14:08.000000',
        '2022-11-28 02:14:08.000000'
    ) RENAME TABLE `celke`.`sts_sobres_servs` TO `celke`.`sts_homes_servs`;

UPDATE
    `sts_homes_servs`
SET
    `titulo_um_serv` = 'Serviço Bom'
WHERE
    `sts_homes_servs`.`id` = 1;

CREATE TABLE `celke`.`sts_homes_actions` (
    `id` INT NOT NULL,
    `title_action` VARCHAR(150) NOT NULL,
    `subtitle_action` VARCHAR(150) NOT NULL,
    `description_action` VARCHAR(150) NOT NULL,
    `link_btn_action` VARCHAR(150) NOT NULL,
    `txt_btn_action` VARCHAR(44) NOT NULL,
    `created` DATETIME NOT NULL,
    `modified` DATETIME NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

ALTER TABLE
    `sts_homes_actions` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;

INSERT INTO
    `sts_homes_actions` (
        `id`,
        `title_action`,
        `subtitle_action`,
        `description_action`,
        `link_btn_action`,
        `txt_btn_action`,
        `created`,
        `modified`
    )
VALUES
    (
        '1',
        'For calling extra attention to featured content or information.\r\n',
        'Elit et mi fringilla commodo eget in lectus!\r\n',
        'Orci varius natoque penatibus et magnis dis parturient montes, nascetur commodo mus.\r\n\r\n',
        'http://localhost/celke/contato',
        'Contato',
        '2022-11-30 23:06:37.000000',
        '2022-11-30 23:06:37.000000'
    )
ALTER TABLE
    `sts_homes_actions`
ADD
    `image` VARCHAR(150) NOT NULL
AFTER
    `txt_btn_action`;

UPDATE
    `sts_homes_actions`
SET
    `image` = 'chamada_acao.jpg'
WHERE
    `sts_homes_actions`.`id` = 1;

CREATE TABLE `celke`.`sts_homes_dets` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `title_det` VARCHAR(150) NOT NULL,
    `subtitle_det` VARCHAR(150) NOT NULL,
    `description_det` TEXT NOT NULL,
    `image` VARCHAR(150) NOT NULL,
    `created` DATETIME NOT NULL,
    `modified` DATETIME NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO
    `sts_homes_dets` (
        `id`,
        `title_det`,
        `subtitle_det`,
        `description_det`,
        `image`,
        `created`,
        `modified`
    )
VALUES
    (
        NULL,
        'Phasellus id consectetur orci.\r\n',
        'Oh yeah, it’s that good.\r\n',
        'Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo',
        'detalhes_servico.jpg',
        '2022-11-30 23:24:35.000000',
        '2022-11-30 23:24:35.000000'
    )
ALTER TABLE
    `sts_homes_dets` CHANGE `modified` `modified` DATETIME NULL;

UPDATE
    `sts_homes_dets`
SET
    `modified` = NULL
WHERE
    `sts_homes_dets`.`id` = 1;

UPDATE
    `sts_sobres_empresas`
SET
    `image` = 'about_company.jpg'
WHERE
    `sts_sobres_empresas`.`id` = 1;

UPDATE
    `sts_sobres_empresas`
SET
    `image` = 'about_company.jpg'
WHERE
    `sts_sobres_empresas`.`id` = 2;

UPDATE
    `sts_sobres_empresas`
SET
    `image` = 'about_company.jpg'
WHERE
    `sts_sobres_empresas`.`id` = 3;

UPDATE
    `sts_sobres_empresas`
SET
    `image` = 'about_company.jpg'
WHERE
    `sts_sobres_empresas`.`id` = 4;

RENAME TABLE `celke`.`sts_sobres_empresas` TO `celke`.`sts_abouts_companies`;

CREATE TABLE `celke`.`sts_contacts` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `title_opening_hours` VARCHAR(150) NOT NULL,
    `opening_hours` VARCHAR(150) NOT NULL,
    `title_address` VARCHAR(150) NOT NULL,
    `address` VARCHAR(150) NOT NULL,
    `address_two` VARCHAR(150) NOT NULL,
    `phone` VARCHAR(44) NOT NULL,
    `created` DATETIME NOT NULL,
    `modified` DATETIME NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO
    `sts_contacts` (
        `id`,
        `title_opening_hours`,
        `opening_hours`,
        `title_address`,
        `address`,
        `address_two`,
        `phone`,
        `created`,
        `modified`
    )
VALUES
    (
        NULL,
        'Entre em contato - ...',
        'Segunda a Sexta: 08:30 às 12:00 e 13:30 às 18:00',
        'Endereço',
        'Avenida Winston Churchill, 936',
        'Capão Raso - Curitiba',
        '(xx) xxxx-xxxx',
        '2022-12-01 23:51:53.000000',
        '2022-12-01 23:51:53.000000'
    ) CREATE TABLE `celke`.`sts_footers` (
        `id` INT NOT NULL AUTO_INCREMENT,
        `title_site` VARCHAR(44) NOT NULL,
        `title_contatc` VARCHAR(44) NOT NULL,
        `phone` VARCHAR(44) NOT NULL,
        `address` VARCHAR(150) NOT NULL,
        `cnpj` VARCHAR(44) NOT NULL,
        `title_social_networks` VARCHAR(44) NOT NULL,
        `txt_one_social_networks` VARCHAR(44) NOT NULL,
        `link_one_social_networks` VARCHAR(150) NOT NULL,
        `txt_two_social_networks` VARCHAR(44) NOT NULL,
        `link_two_social_networks` VARCHAR(150) NOT NULL,
        `txt_three_social_networks` VARCHAR(44) NOT NULL,
        `link_three_social_networks` VARCHAR(150) NOT NULL,
        `txt_four_social_networks` VARCHAR(44) NOT NULL,
        `link_four_social_networks` VARCHAR(150) NOT NULL,
        `created` DATETIME NOT NULL,
        `modified` DATETIME NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;

INSERT INTO
    `sts_footers` (
        `id`,
        `title_site`,
        `title_contatc`,
        `phone`,
        `address`,
        `cnpj`,
        `title_social_networks`,
        `txt_one_social_networks`,
        `link_one_social_networks`,
        `txt_two_social_networks`,
        `link_two_social_networks`,
        `txt_three_social_networks`,
        `link_three_social_networks`,
        `txt_four_social_networks`,
        `link_four_social_networks`,
        `created`,
        `modified`
    )
VALUES
    (
        NULL,
        'Celke',
        'Contato',
        '(XX) XXXXX-XXXX',
        'Av. Winston Churchill',
        'CNPJ: XX.XXX.XXX/XXXX-XX',
        '',
        'Instagram',
        'https://www.instagram.com/celkecursos',
        'Facebook',
        'https://www.facebook.com/celkecursos/',
        'Youtube',
        'https://www.youtube.com/channel/UC5ClMRHFl8o_MAaO4w7ZYug',
        'Twiter',
        'https://www.youtube.com/channel/UC5ClMRHFl8o_MAaO4w7ZYug',
        '2022-12-02 00:39:18.000000',
        '2022-12-02 00:39:18.000000'
    )
ALTER TABLE
    `sts_footers` CHANGE `title_social_networks` `social_networks` VARCHAR(44) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;

ALTER TABLE
    `sts_footers`
ADD
    `url_address` VARCHAR(150) NOT NULL
AFTER
    `modified`,
ADD
    `url_cnpj` VARCHAR(150) NOT NULL
AFTER
    `url_address`;

UPDATE
    `sts_footers`
SET
    `social_networks` = 'Redes Scociais'
WHERE
    `sts_footers`.`id` = 1;

UPDATE
    `sts_footers`
SET
    `url_address` = 'http://localhost/celke/contato'
WHERE
    `sts_footers`.`id` = 1;

UPDATE
    `sts_footers`
SET
    `url_cnpj` = 'http://localhost/celke/contato'
WHERE
    `sts_footers`.`id` = 1;

ALTER TABLE
    `sts_footers` CHANGE `social_networks` `title_social_networks` VARCHAR(44) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;

ALTER TABLE
    `sts_footers` CHANGE `url_address` `url_address` VARCHAR(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
AFTER
    `address`,
    CHANGE `url_cnpj` `url_cnpj` VARCHAR(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
AFTER
    `cnpj`

    ALTER TABLE `sts_footers` CHANGE `title_contatc` `title_contact` VARCHAR(44) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;