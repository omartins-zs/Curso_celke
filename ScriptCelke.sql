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
    `sts_homes` CHANGE `description` `description_topo` VARCHAR(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;

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
    `sts_homes_tops` CHANGE `title_topo` `title_top` VARCHAR(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;

ALTER TABLE
    `sts_homes_tops` CHANGE `description_topo` `description_top` VARCHAR(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;

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
    `sts_homes_tops` CHANGE `link_btn_top` `link_btn_top` VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
AFTER
    `description_top`,
    CHANGE `txt_btn_top` `txt_btn_top` VARCHAR(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
AFTER
    `link_btn_top`,
    CHANGE `image` `image` VARCHAR(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
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