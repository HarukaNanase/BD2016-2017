/* populate relations */


/*User(​nif​, nome, telefone)*/

insert into User values(249498065, 'Mateus Oliveira', 212539316);
insert into User values(251763730, 'Camila Sousa', 218153173);
insert into User values(244393630, 'Vinicius Pereira', 212294309);
insert into User values(215119479, 'Carla Dias', 243312872);
insert into User values(226856780, 'Isabelle Santos', 229430957);
insert into User values(281264317, 'Matilde Almeida', 223722404);
insert into User values(220385882, 'Diogo Melo', 243879317);
insert into User values(236693638, 'Leonardo Goncalves', 253448060);
insert into User values(224072404, 'Yasmin Castro', 232774870);
insert into User values(284527130, 'Rafael Dias', 234870072);
insert into User values(200549383, 'Eduarda Pereira', 271297735);
insert into User values(256418829, 'Gustavo Ribeiro', 253772056);
insert into User values(296066532, 'Tiago Cardoso ', 253539178);
insert into User values(254121080, 'Julia Ribeiro', 212893435);
insert into User values(239465601, 'Ana Azevedo', 212738980);



/*Fiscal(id​, empresa)*/

insert into Fiscal values(1, 'Bypad');
insert into Fiscal values(2, 'Kizz');
insert into Fiscal values(3, 'Poloshare');
insert into Fiscal values(4, 'Masswire');
insert into Fiscal values(5, 'Powerboo');
insert into Fiscal values(6, 'Vomega');
insert into Fiscal values(7, 'Mulite');
insert into Fiscal values(8, 'Goldentor');
insert into Fiscal values(9, 'Rengun');
insert into Fiscal values(10, 'Vefer');
insert into Fiscal values(11, 'Aslotus');
insert into Fiscal values(12, 'Gegrow');
insert into Fiscal values(13, 'Nifit');
insert into Fiscal values(14, 'Bittie');
insert into Fiscal values(15, 'Megafor');



/*Edificio(​morada​)*/

insert into Edificio values('Rua Bacelo n.68');
insert into Edificio values('Rua Caminho Cruz n.57');
insert into Edificio values('Rua Sardinha n.99');
insert into Edificio values('Rua Joseph Arlindo Madeira n.62');
insert into Edificio values('Rua Augusta n.16');
insert into Edificio values('Avenida Miguel Bombarda n.90');
insert into Edificio values('Rua Cruzes n.76');
insert into Edificio values('Rua Doutor Jose Marques n.88');
insert into Edificio values('Rua Padre Antonio Vieira n.94'); /*posto*/
insert into Edificio values('Rua Engenheiro Duarte Pacheco n.22'); /*posto*/
insert into Edificio values('Avenida Visconde Valmor n.101'); /*posto*/
insert into Edificio values('Avenida Marques Tomar n.2'); /*posto*/
insert into Edificio values('Rua Mouco n.68'); /*posto*/
insert into Edificio values('Rua Alferes Veiga Pestana n.84'); /*posto*/
insert into Edificio values('Avenida Guerra Junqueiro n.115'); /*posto*/



/*Alugavel(​morada, código​, foto)
			morada: FK(Edificio)*/

insert into Alugavel values('Rua Caminho Cruz n.57', 1, 'Foto 1');
insert into Alugavel values('Avenida Miguel Bombarda n.90', 2, 'Foto 2');
insert into Alugavel values('Rua Mouco n.68', 3, 'Foto 3');
insert into Alugavel values('Rua Cruzes n.76', 4, 'Foto 4');
insert into Alugavel values('Rua Joseph Arlindo Madeira n.62', 5, 'Foto 5');
insert into Alugavel values('Avenida Marques Tomar n.2', 6, 'Foto 6');
insert into Alugavel values('Rua Alferes Veiga Pestana n.84', 7, 'Foto 7');
insert into Alugavel values('Rua Augusta n.16', 8, 'Foto 8');
insert into Alugavel values('Rua Sardinha n.99', 9, 'Foto 9');
insert into Alugavel values('Rua Bacelo n.68', 10, 'Foto 10');
insert into Alugavel values('Rua Padre Antonio Vieira n.94', 11, 'Foto 11');
insert into Alugavel values('Rua Augusta n.16', 12, 'Foto 12');
insert into Alugavel values('Avenida Marques Tomar n.2', 13, 'Foto 13');
insert into Alugavel values('Rua Engenheiro Duarte Pacheco n.22', 14, 'Foto 14');
insert into Alugavel values('Rua Joseph Arlindo Madeira n.62', 15, 'Foto 15');



/*Arrenda(​morada, código​ , nif)
			morada, código: FK(Alugavel)
			nif: FK(User)*/

insert into Arrenda values('Avenida Marques Tomar n.2', 6, 229430957);
insert into Arrenda values('Avenida Miguel Bombarda n.90', 2, 253539178);
insert into Arrenda values('Rua Mouco n.68', 3, 212294309);
insert into Arrenda values('Rua Cruzes n.76', 4, 212738980);
insert into Arrenda values('Rua Joseph Arlindo Madeira n.62', 5, 253772056);
insert into Arrenda values('Rua Joseph Arlindo Madeira n.62', 15, 243879317);
insert into Arrenda values('Avenida Marques Tomar n.2', 13, 212893435);
insert into Arrenda values('Rua Alferes Veiga Pestana n.84', 7, 218153173);
insert into Arrenda values('Rua Augusta n.16', 8, 243312872);
insert into Arrenda values('Rua Sardinha n.99', 9, 223722404);
insert into Arrenda values('Rua Bacelo n.68', 10, 232774870);
insert into Arrenda values('Rua Caminho Cruz n.57', 1, 212539316);
insert into Arrenda values('Rua Padre Antonio Vieira n.94', 11, 253448060);
insert into Arrenda values('Rua Augusta n.16', 12, 234870072);
insert into Arrenda values('Rua Engenheiro Duarte Pacheco n.22', 14, 271297735);



/*Fiscaliza(​id, morada, código​)
			id: FK(Fiscal)
			morada, código: FK(Arrenda)*/

insert into Fiscaliza values(1, 'Avenida Marques Tomar n.2', 6);
insert into Fiscaliza values(2, 'Rua Joseph Arlindo Madeira n.62', 5);
insert into Fiscaliza values(3, 'Rua Engenheiro Duarte Pacheco n.22', 14);
insert into Fiscaliza values(4, 'Rua Augusta n.16', 8);
insert into Fiscaliza values(5, 'Rua Cruzes n.76', 4);
insert into Fiscaliza values(6, 'Rua Augusta n.16', 12);
insert into Fiscaliza values(7, 'Rua Mouco n.68', 3);
insert into Fiscaliza values(8, 'Avenida Marques Tomar n.2', 13);
insert into Fiscaliza values(9, 'Rua Sardinha n.99', 9);
insert into Fiscaliza values(10, 'Rua Joseph Arlindo Madeira n.62', 15);
insert into Fiscaliza values(11, 'Rua Caminho Cruz n.57', 1);
insert into Fiscaliza values(12, 'Avenida Miguel Bombarda n.90', 2);
insert into Fiscaliza values(13, 'Rua Padre Antonio Vieira n.94', 11);
insert into Fiscaliza values(14, 'Rua Bacelo n.68', 10);
insert into Fiscaliza values(15, 'Rua Alferes Veiga Pestana n.84', 7);



/*Espaço(​morada, código​)
			morada, código: FK(Alugavel)*/

insert into Espaco values('Rua Caminho Cruz n.57', 1);
insert into Espaco values('Avenida Miguel Bombarda n.90', 2);
insert into Espaco values('Rua Mouco n.68', 3);
insert into Espaco values('Rua Cruzes n.76', 4);
insert into Espaco values('Rua Joseph Arlindo Madeira n.62', 5);
insert into Espaco values('Avenida Marques Tomar n.2', 6);
insert into Espaco values('Rua Alferes Veiga Pestana n.84', 7);
insert into Espaco values('Rua Augusta n.16', 8);
insert into Espaco values('Rua Sardinha n.99', 9);
insert into Espaco values('Rua Bacelo n.68', 10);
insert into Espaco values('Rua Padre Antonio Vieira n.94', 11);
insert into Espaco values('Rua Augusta n.16', 12);
insert into Espaco values('Avenida Marques Tomar n.2', 13);
insert into Espaco values('Rua Engenheiro Duarte Pacheco n.22', 14);
insert into Espaco values('Rua Joseph Arlindo Madeira n.62', 15);




/*Posto(​morada, código​ , código_espaço)
			morada, código: FK(Alugável)
			morada, código_espaço: FK(Espaço)*/

insert into Posto values('Rua Caminho Cruz n.57', 1, 1);
insert into Posto values('Avenida Miguel Bombarda n.90', 2, 2);
insert into Posto values('Rua Mouco n.68', 3, 3);
insert into Posto values('Rua Cruzes n.76', 4, 4);
insert into Posto values('Rua Joseph Arlindo Madeira n.62', 5, 5);
insert into Posto values('Avenida Marques Tomar n.2', 6, 6);
insert into Posto values('Rua Alferes Veiga Pestana n.84', 7, 7);
insert into Posto values('Rua Augusta n.16', 8, 8);
insert into Posto values('Rua Sardinha n.99', 9, 9);
insert into Posto values('Rua Bacelo n.68', 10, 10);
insert into Posto values('Rua Padre Antonio Vieira n.94', 11, 11);
insert into Posto values('Rua Augusta n.16', 12, 12);
insert into Posto values('Avenida Marques Tomar n.2', 13, 13);
insert into Posto values('Rua Engenheiro Duarte Pacheco n.22', 14, 14);
insert into Posto values('Rua Joseph Arlindo Madeira n.62', 15, 15);



/*Oferta(​morada, código, data_inicio​ data_fim, tarifa)
			morada, código: FK(alugável)*/

insert into Oferta values('Rua Caminho Cruz n.57', 1, '2012-12-20 00:00:00', '2012-12-27 00:00:00', 'semanal');
insert into Oferta values('Avenida Miguel Bombarda n.90', 2, '2013-01-01 00:00:00', '2013-02-01 00:00:00', 'mensal');
insert into Oferta values('Rua Mouco n.68', 3, '2013-03-10 00:00:00', '2013-04-10 00:00:00', 'mensal');
insert into Oferta values('Rua Cruzes n.76', 4, '2013-04-10 00:00:00', '2013-04-17 00:00:00', 'semanal');
insert into Oferta values('Rua Joseph Arlindo Madeira n.62', 5, '2013-05-16 00:00:00', '2012-05-21 00:00:00', 'semanal');
insert into Oferta values('Avenida Marques Tomar n.2', 6, '2014-06-07 00:00:00', '2014-07-07 00:00:00', 'mensal');
insert into Oferta values('Rua Alferes Veiga Pestana n.84', 7, '2014-03-12 00:00:00', '2014-03-17 00:00:00', 'semanal');
insert into Oferta values('Rua Augusta n.16', 8, '2012-11-20 00:00:00', '2012-12-20 00:00:00', 'mensal');
insert into Oferta values('Rua Sardinha n.99', 9, '2015-06-30 00:00:00', '2015-07-30 00:00:00', 'mensal');
insert into Oferta values('Rua Bacelo n.68', 10, '2016-08-11 00:00:00', '2016-08-18 00:00:00', 'semanal');
insert into Oferta values('Rua Padre Antonio Vieira n.94', 11, '2016-03-02 00:00:00', '2016-04-02 00:00:00', 'mensal');
insert into Oferta values('Rua Augusta n.16', 12, '2015-10-10 00:00:00', '2015-10-17 00:00:00', 'semanal');
insert into Oferta values('Avenida Marques Tomar n.2', 13, '2013-02-03 00:00:00', '2013-02-10 00:00:00', 'semanal');
insert into Oferta values('Rua Engenheiro Duarte Pacheco n.22', 14, '2012-04-20 00:00:00', '2012-05-20 00:00:00', 'mensal');
insert into Oferta values('Rua Joseph Arlindo Madeira n.62', 15, '2015-09-04 00:00:00', '2015-09-11 00:00:00', 'semanal');



/*Reserva(​número​ )*/

insert into Reserva values(1);
insert into Reserva values(2);
insert into Reserva values(3);
insert into Reserva values(4);
insert into Reserva values(5);
insert into Reserva values(6);
insert into Reserva values(7);
insert into Reserva values(8);
insert into Reserva values(9);
insert into Reserva values(10);
insert into Reserva values(11);
insert into Reserva values(12);
insert into Reserva values(13);
insert into Reserva values(14);
insert into Reserva values(15);



/*Aluga(​morada, código, data_inicio, nif, número​ )
		morada, código, data-inicio: FK(Oferta)
		nif: FK(User)
		número: FK(Reserva)*/

insert into Aluga values('Rua Caminho Cruz n.57', 1, '2012-12-20 00:00:00', 212539316, 1);
insert into Aluga values('Avenida Miguel Bombarda n.90', 2, '2013-01-01 00:00:00', 253539178, 2);
insert into Aluga values('Rua Mouco n.68', 3, '2013-03-10 00:00:00', 212294309, 3);
insert into Aluga values('Rua Cruzes n.76', 4, '2013-04-10 00:00:00', 212738980, 4);
insert into Aluga values('Rua Joseph Arlindo Madeira n.62', 5, '2013-05-16 00:00:00', 253772056, 5);
insert into Aluga values('Avenida Marques Tomar n.2', 6, '2014-06-07 00:00:00', 229430957, 6);
insert into Aluga values('Rua Alferes Veiga Pestana n.84', 7, '2014-03-12 00:00:00', 218153173, 7);
insert into Aluga values('Rua Augusta n.16', 8, '2012-11-20 00:00:00', 243312872, 8);
insert into Aluga values('Rua Sardinha n.99', 9, '2015-06-30 00:00:00', 223722404, 9);
insert into Aluga values('Rua Bacelo n.68', 10, '2016-08-11 00:00:00', 232774870, 10);
insert into Aluga values('Rua Padre Antonio Vieira n.94', 11, '2016-03-02 00:00:00', 253448060, 11);
insert into Aluga values('Rua Augusta n.16', 12, '2015-10-10 00:00:00', 234870072, 12);
insert into Aluga values('Avenida Marques Tomar n.2', 13, '2013-02-03 00:00:00', 212893435, 13);
insert into Aluga values('Rua Engenheiro Duarte Pacheco n.22', 14, '2012-04-20 00:00:00', 271297735, 14);
insert into Aluga values('Rua Joseph Arlindo Madeira n.62', 15, '2015-09-04 00:00:00', 243879317, 15);



/*Paga(​número​ , data, método)
		número: FK(Reserva)*/

insert into Paga values(1, '2012-12-23 00:00:00', 'multibanco');
insert into Paga values(2, '2013-01-07 00:00:00', 'dinheiro');
insert into Paga values(3, '2013-03-15 00:00:00','dinheiro');
insert into Paga values(4, '2013-04-19 00:00:00','multibanco');
insert into Paga values(5, '2013-05-18 00:00:00','multibanco');
insert into Paga values(6, '2014-06-10 00:00:00','dinheiro');
insert into Paga values(7, '2014-03-20 00:00:00','multibanco');




/*Estado(​número, timestamp​ , estado)
			número: FK(Reserva)*/

insert into Estado values(1, '2012-12-23 00:00:00', 'Pendente');
insert into Estado values(2, '2013-01-07 00:00:00', 'Pendente');
insert into Estado values(3, '2013-03-10 00:00:00','Aceite');
insert into Estado values(4, '2013-04-10 00:00:00','Pendente');
insert into Estado values(5, '2013-05-16 00:00:00','Aceite');
insert into Estado values(6, '2014-06-07 00:00:00','Aceite');
insert into Estado values(7, '2014-03-12 00:00:00','Aceite');
insert into Estado values(8, '2012-11-20 00:00:00','multibanco');
insert into Estado values(9, '2015-06-30 00:00:00','Cancelada');
insert into Estado values(10, '2016-08-11 00:00:00','Cancelada');
insert into Estado values(11, '2016-03-02 00:00:00','Declinada');
insert into Estado values(12, '2015-10-10 00:00:00','Cancelada');
insert into Estado values(13, '2013-02-03 00:00:00','Aceite');
insert into Estado values(14, '2012-04-20 00:00:00','Declinada');
insert into Estado values(15, '2015-09-04 00:00:00','Declinada');
