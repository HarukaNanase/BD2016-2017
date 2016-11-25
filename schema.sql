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

PRIMARY KEY (id,morada,código),
FOREIGN KEY (id) REFERENCES Fiscal(id),
FOREIGN KEY(morada,código) REFERENCES Arrenda(morada,código)

);

CREATE TABLE Espaço
(
morada varchar(255) NOT NULL,
código int NOT NULL,
PRIMARY KEY(morada,código),
FOREIGN KEY(morada,código) REFERENCES Alugável(morada,código)
)

CREATE TABLE Posto
(

morada varchar(255) NOT NULL,
código int NOT NULL,
código_espaço int NOT NULL,

PRIMARY KEY (morada,código),
FOREIGN KEY(morada,código) REFERENCES Alugável(morada,código),
FOREIGN KEY(morada,código_espaço) REFERENCES Espaço(morada,código)

)

CREATE TABLE Oferta
(
morada varchar(255) NOT NULL,
código int NOT NULL,
data_inicio date NOT NULL,
data_fim date NOT NULL,
tarifa varchar(255) NOT NULL,

PRIMARY KEY (morada,código,data_inicio),
FOREIGN KEY (morada,código) REFERENCES Alugável(morada,código)
)

CREATE TABLE Aluga
(
morada varchar(255) NOT NULL,
código int NOT NULL,
data_inicio date NOT NULL,
nif int NOT NULL,
número int NOT NULL,
PRIMARY KEY (morada,código,data_inicio,nif,número),
FOREIGN KEY(morada,código,data_inicio) REFERENCES Oferta(morada,código,data_inicio),
FOREIGN KEY nif REFERENCES User(nif),
FOREIGN KEY número REFERENCES Reserva(número)
)

CREATE TABLE Paga
(
número int NOT NULL,
data date NOT NULL,
método varchar(255) NOT NULL,

PRIMARY KEY (número),
FOREIGN KEY número REFERENCES Reserva(número)

)


