CREATE TABLE User
(
nif int NOT NULL,
nome varchar(255) NOT NULL,
telefone int NOT NULL,

PRIMARY KEY nif
);

CREATE TABLE Fiscal
(
id int NOT NULL,
empresa varchar(255) NOT NULL,


PRIMARY KEY id
);

CREATE TABLE Edificio
(
morada varchar(255) NOT NULL,

PRIMARY KEY morada

);

CREATE TABLE Alugável
(
morada varchar(255) NOT NULL,
código int NOT NULL,
foto varchar(255) NOT NULL,

PRIMARY KEY (morada,código),
FOREIGN KEY (morada) REFERENCES Edificio(morada)

);

CREATE TABLE Arrenda
(
morada varchar(255) NOT NULL,
código int NOT NULL,
nif int NOT NULL,

PRIMARY KEY (morada,código),
FOREIGN KEY (morada,código) REFERENCES Alugável(morada,código),
FOREIGN KEY (nif) REFERENCES User(nif)

);

CREATE TABLE Fiscaliza
(
id int NOT NULL,
morada varchar(255) NOT NULL,
código int NOT NULL,



);

