CREATE DATABASE db_cad_pessoa;
USE db_cad_pessoa;

CREATE TABLE pessoa (
    id INT(12) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(25) NOT NULL,
    endereco VARCHAR(50) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    nascimento DATE NOT NULL,

    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
