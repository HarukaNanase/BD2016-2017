<<<<<<< HEAD
SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE User;
DROP TABLE Fiscal;
DROP TABLE Edificio;
DROP TABLE Alugavel;
DROP TABLE Arrenda;
DROP TABLE Fiscaliza;
DROP TABLE Espaco;
DROP TABLE Reserva;
DROP TABLE Posto;
DROP TABLE Oferta;
DROP TABLE Aluga;
DROP TABLE Paga;
DROP TABLE Estado;
SET FOREIGN_KEY_CHECKS = 1;

CREATE TABLE User
(
nif int NOT NULL,
nome varchar(255) NOT NULL,
telefone int NOT NULL,

PRIMARY KEY (nif)
);

CREATE TABLE Fiscal
(
id int NOT NULL,
empresa varchar(255) NOT NULL,


PRIMARY KEY (id)

);

CREATE TABLE Edificio
(
morada varchar(255) NOT NULL,

PRIMARY KEY (morada)


);

CREATE TABLE Alugavel
(
morada varchar(255) NOT NULL,
codigo int NOT NULL,
foto varchar(255) NOT NULL,

PRIMARY KEY (morada,codigo),
FOREIGN KEY (morada) REFERENCES Edificio(morada)
ON DELETE CASCADE

);

CREATE TABLE Arrenda
(
morada varchar(255) NOT NULL,
codigo int NOT NULL,
nif int NOT NULL,

PRIMARY KEY (morada,codigo),
FOREIGN KEY (morada,codigo) REFERENCES Alugavel(morada,codigo) ON DELETE CASCADE,
FOREIGN KEY (nif) REFERENCES User(nif) ON DELETE CASCADE


);	

CREATE TABLE Fiscaliza
(
id int NOT NULL,
morada varchar(255) NOT NULL,
codigo int NOT NULL,

PRIMARY KEY (id,morada,codigo),
FOREIGN KEY (id) REFERENCES Fiscal(id) ON DELETE CASCADE,
FOREIGN KEY(morada,codigo) REFERENCES Arrenda(morada,codigo)
ON DELETE CASCADE
);

CREATE TABLE Espaco
(
morada varchar(255) NOT NULL,
codigo int NOT NULL,
PRIMARY KEY(morada,codigo),
FOREIGN KEY(morada,codigo) REFERENCES Alugavel(morada,codigo)
ON DELETE CASCADE
);

CREATE TABLE Posto
(

morada varchar(255) NOT NULL,
codigo int NOT NULL,
codigo_espaco int NOT NULL,

PRIMARY KEY (morada,codigo),
FOREIGN KEY(morada,codigo) REFERENCES Alugavel(morada,codigo) ON DELETE CASCADE,
FOREIGN KEY(morada,codigo_espaco) REFERENCES Espaco(morada,codigo)
ON DELETE CASCADE
);

CREATE TABLE Oferta
(
morada varchar(255) NOT NULL,
codigo int NOT NULL,
data_inicio date NOT NULL,
data_fim date NOT NULL,
tarifa varchar(255) NOT NULL,

PRIMARY KEY (morada,codigo,data_inicio),
FOREIGN KEY (morada,codigo) REFERENCES Alugavel(morada,codigo)
ON DELETE CASCADE
);

CREATE TABLE Reserva
(
numero int NOT NULL, 

PRIMARY KEY (numero)
);

CREATE TABLE Aluga
(
morada varchar(255) NOT NULL,
codigo int NOT NULL,
data_inicio date NOT NULL,
nif int NOT NULL,
numero int NOT NULL,
PRIMARY KEY (morada,codigo,data_inicio,nif,numero),
FOREIGN KEY(morada,codigo,data_inicio) REFERENCES Oferta(morada,codigo,data_inicio) ON DELETE CASCADE,
FOREIGN KEY (nif) REFERENCES User(nif) ON DELETE CASCADE,
FOREIGN KEY (numero) REFERENCES Reserva(numero) ON DELETE CASCADE 

);

CREATE TABLE Paga
(
numero int NOT NULL,
data date NOT NULL,
metodo varchar(255) NOT NULL,

PRIMARY KEY (numero),
FOREIGN KEY (numero) REFERENCES Reserva(numero)
ON DELETE CASCADE
);

CREATE TABLE Estado
(
numero int NOT NULL,
tempo date NOT NULL,
estado varchar(255),

PRIMARY KEY(numero,tempo),
FOREIGN KEY(numero) REFERENCES Reserva(numero)
ON DELETE CASCADE
);



=======
SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE User;
DROP TABLE Fiscal;
DROP TABLE Edificio;
DROP TABLE Alugavel;
DROP TABLE Arrenda;
DROP TABLE Fiscaliza;
DROP TABLE Espaco;
DROP TABLE Reserva;
DROP TABLE Posto;
DROP TABLE Oferta;
DROP TABLE Aluga;
DROP TABLE Paga;
DROP TABLE Estado;
SET FOREIGN_KEY_CHECKS = 1;

CREATE TABLE User
(
nif int NOT NULL,
nome varchar(255) NOT NULL,
telefone int NOT NULL,

PRIMARY KEY (nif)
);

CREATE TABLE Fiscal
(
id int NOT NULL,
empresa varchar(255) NOT NULL,


PRIMARY KEY (id)

);

CREATE TABLE Edificio
(
morada varchar(255) NOT NULL,

PRIMARY KEY (morada)


);

CREATE TABLE Alugavel
(
morada varchar(255) NOT NULL,
codigo int NOT NULL,
foto varchar(255) NOT NULL,

PRIMARY KEY (morada,codigo),
FOREIGN KEY (morada) REFERENCES Edificio(morada)
ON DELETE CASCADE

);

CREATE TABLE Arrenda
(
morada varchar(255) NOT NULL,
codigo int NOT NULL,
nif int NOT NULL,

PRIMARY KEY (morada,codigo),
FOREIGN KEY (morada,codigo) REFERENCES Alugavel(morada,codigo) ON DELETE CASCADE,
FOREIGN KEY (nif) REFERENCES User(nif) ON DELETE CASCADE


);	

CREATE TABLE Fiscaliza
(
id int NOT NULL,
morada varchar(255) NOT NULL,
codigo int NOT NULL,

PRIMARY KEY (id,morada,codigo),
FOREIGN KEY (id) REFERENCES Fiscal(id) ON DELETE CASCADE,
FOREIGN KEY(morada,codigo) REFERENCES Arrenda(morada,codigo)
ON DELETE CASCADE
);

CREATE TABLE Espaco
(
morada varchar(255) NOT NULL,
codigo int NOT NULL,
PRIMARY KEY(morada,codigo),
FOREIGN KEY(morada,codigo) REFERENCES Alugavel(morada,codigo)
ON DELETE CASCADE
);

CREATE TABLE Posto
(

morada varchar(255) NOT NULL,
codigo int NOT NULL,
codigo_espaco int NOT NULL,

PRIMARY KEY (morada,codigo),
FOREIGN KEY(morada,codigo) REFERENCES Alugavel(morada,codigo) ON DELETE CASCADE,
FOREIGN KEY(morada,codigo_espaco) REFERENCES Espaco(morada,codigo)
ON DELETE CASCADE
);

CREATE TABLE Oferta
(
morada varchar(255) NOT NULL,
codigo int NOT NULL,
data_inicio datetime NOT NULL,
data_fim date NOT NULL,
tarifa varchar(255) NOT NULL,

PRIMARY KEY (morada,codigo,data_inicio),
FOREIGN KEY (morada,codigo) REFERENCES Alugavel(morada,codigo)
ON DELETE CASCADE
);

CREATE TABLE Reserva
(
numero int NOT NULL, 

PRIMARY KEY (numero)
);

CREATE TABLE Aluga
(
morada varchar(255) NOT NULL,
codigo int NOT NULL,
data_inicio datetime NOT NULL,
nif int NOT NULL,
numero int NOT NULL,
PRIMARY KEY (morada,codigo,data_inicio,nif,numero),
FOREIGN KEY(morada,codigo,data_inicio) REFERENCES Oferta(morada,codigo,data_inicio) ON DELETE CASCADE,
FOREIGN KEY (nif) REFERENCES User(nif) ON DELETE CASCADE,
FOREIGN KEY (numero) REFERENCES Reserva(numero) ON DELETE CASCADE 

);

CREATE TABLE Paga
(
numero int NOT NULL,
`data` datetime NOT NULL,
metodo varchar(255) NOT NULL,

PRIMARY KEY (numero),
FOREIGN KEY (numero) REFERENCES Reserva(numero)
ON DELETE CASCADE
);

CREATE TABLE Estado
(
numero int NOT NULL,
`timestamp` datetime NOT NULL,
estado varchar(255),

PRIMARY KEY(numero,`timestamp`),
FOREIGN KEY(numero) REFERENCES Reserva(numero)
ON DELETE CASCADE
);



>>>>>>> c55218d359f48327d4486c0db97e5678b8463d89
