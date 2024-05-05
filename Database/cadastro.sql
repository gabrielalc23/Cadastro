CREATE DATABASE cadastro;
USE cadastro;

CREATE TABLE usuario(
	id 		      INT PRIMARY KEY AUTO_INCREMENT,
    nome	      VARCHAR(50) NOT NULL,
	nascimento    DATE,
    email 	      VARCHAR(255) NOT NULL,
    telefone      VARCHAR(15) NOT NULL,
    senha	      VARCHAR(50) NOT NULL,
    foto_perfil   VARCHAR(100),
	chave         INT,
    nota_primeiro FLOAT,
    nota_segundo  FLOAT,
    nota_terceiro FLOAT,
    nota_quarto   FLOAT,
    falta		  BOOLEAN
);

select * from usuario;
INSERT INTO usuario(nome, nascimento, email, telefone, senha, chave) 
VALUES ('administrador', STR_TO_DATE('11/09/2001', '%d/%m/%Y'), "adminsenai@gmail.com", '3499-1450', 'admin', 1);
CREATE TABLE curso (
    id_disciplina INT PRIMARY KEY AUTO_INCREMENT,
    alunos		  INT,
    FOREIGN KEY (alunos) 
		REFERENCES cadastro.usuario(id),		
    nome_curso VARCHAR(255)
);
