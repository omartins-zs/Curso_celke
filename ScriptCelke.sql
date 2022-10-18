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
    )