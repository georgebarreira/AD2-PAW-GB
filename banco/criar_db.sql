-- source /opt/lampp/htdocs/AD2-PAW-GB/banco/criar_db.sql; dentro do MySQL
DROP DATABASE IF EXISTS prompt_battle;

CREATE DATABASE prompt_battle;
FLUSH PRIVILEGES;   

USE prompt_battle;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR (100),
    nickname VARCHAR (50) UNIQUE,
    email VARCHAR (100) UNIQUE,
    pontos INT DEFAULT 0
    );

CREATE TABLE modelos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR (100),
    empresa VARCHAR (100),
    versao VARCHAR (50),
    status ENUM('ativo', 'inativo')
    );

CREATE TABLE desafios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR (100),
    descricao TEXT,
    categoria VARCHAR (50),
    data_limite DATETIME,
    status ENUM('aberto', 'finalizado')
    );

CREATE TABLE submissoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    desafio_id INT,
    modelo_id INT,
    prompt TEXT,
    resposta TEXT,
    nota DECIMAL (5,2),
    data_submissao DATETIME,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (desafio_id) REFERENCES desafios(id),
    FOREIGN KEY (modelo_id) REFERENCES modelos(id)
);


--SHOW TABLES;

--DESCRIBE usuarios;
--DESCRIBE modelos;
--DESCRIBE desafios;
--DESCRIBE submissoes;