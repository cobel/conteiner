CREATE DATABASE  dbconteiner;

USE dbconteiner;

CREATE TABLE tbconteineres (
	cliente VARCHAR(40) NOT NULL,
	numconteiner VARCHAR(11) NOT NULL PRIMARY KEY,
	tipo VARCHAR(2) NOT NULL,
	status CHAR(1) NOT NULL,
	categoria char(1) NOT NULL
);

CREATE TABLE tbmovimentacoes (
	id int(5) NOT NULL UNIQUE PRIMARY KEY AUTO_INCREMENT,
	cliente varchar(40) NOT NULL,
	tipo ENUM ('Embarque', 'Descarga', 'Gate In', 'Gate Out', 'Posicionamento Pilha', 'Pesagem', 'Scanner') NOT NULL,
	data_inicio DATETIME NOT NULL,
	data_fim DATETIME NOT NULL
);

select * from tbconteineres;