CREATE DATABASE cadastro;
USE cadastro;

CREATE TABLE usuario(
	id 		      INT PRIMARY KEY AUTO_INCREMENT,
    nome	      VARCHAR(50) NOT NULL,
	nascimento    DATE NOT NULL,
    email 	      VARCHAR(255) NOT NULL,
    telefone      VARCHAR(15) NOT NULL,
    senha	      VARCHAR(50) NOT NULL,
	chave         INT,
    nota_primeiro FLOAT,
    nota_segundo  FLOAT,
    nota_terceiro FLOAT,
    nota_quarto   FLOAT
);

INSERT INTO usuario(nome, nascimento, email, telefone, senha, chave) 
	VALUES ('administrador', '11/09/2001', "adminsenai@gmail.com", '3499-1450', 'admin', 1);

CREATE TABLE curso (
    id_disciplina INT PRIMARY KEY AUTO_INCREMENT,
    alunos		  INT,
    FOREIGN KEY (alunos) 
		REFERENCES cadastro.usuario(id),		
    nome_curso VARCHAR(255),
    nota	   FLOAT,
	FOREIGN KEY (nota) 
		REFERENCES usuario(nota)
);
