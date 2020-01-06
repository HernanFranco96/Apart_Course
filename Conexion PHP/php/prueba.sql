CREATE DATABASE registro;

USE registro;

DROP TABLE IF EXISTS usuario;

CREATE TABLE usuario(
	id int(4) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre varchar(30) NOT NULL,
    contra varchar(30) NOT NULL
);

SELECT * FROM usuario;

DELETE FROM usuario WHERE id = 3;
