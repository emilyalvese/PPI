CREATE DATABASE IF NOT EXISTS crud;

USE crud;

CREATE TABLE musicas (
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    cantora VARCHAR(100),
    tempo INT NOT NULL,
    album VARCHAR(100)
);

SELECT * FROM musicas;