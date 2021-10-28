CREATE TABLE login (
	codigo serial,
	usuario varchar(15) UNIQUE NOT NULL,
	senha varchar(50) NOT NULL,
	tipo integer NOT NULL DEFAULT 1,
	PRIMARY KEY (codigo)
);

CREATE TABLE cliente (
	codigo serial,
	nome varchar(100) NOT NULL,
	cpf varchar(11) UNIQUE,
	endereco varchar(200),
	login integer NOT NULL UNIQUE,
	PRIMARY KEY (codigo)
);

CREATE TABLE pet (
	cliente integer,
	nome varchar(20) NOT NULL,
	especie varchar (50) NOT NULL,
	PRIMARY KEY (cliente, nome)
);

ALTER TABLE cliente ADD FOREIGN KEY (login) REFERENCES login (codigo);
ALTER TABLE pet ADD FOREIGN KEY (cliente) REFERENCES cliente (codigo);