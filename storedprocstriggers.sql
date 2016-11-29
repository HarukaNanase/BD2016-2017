DROP TRIGGER if exists lastState;
delimiter //
CREATE TRIGGER lastState before insert on Paga FOR EACH ROW
BEGIN
declare ultimo datetime;

SELECT max(`timestamp`) from Estado where numero = new.numero into ultimo;
/*insert into Teste values (ultimo, new.`data`, timestampdiff(second,ultimo,new.`data`));
*/
IF timestampdiff(second,ultimo,new.`data`) <= 0
THEN
CALL raise_error;
END IF;



END; //

delimiter ;	





DROP TRIGGER if exists overlappedDates;

delimiter //
CREATE TRIGGER overlappedDates before insert on Oferta FOR EACH ROW
BEGIN
declare dataInicioAnterior datetime;
declare dataFimAnterior datetime;

select max(data_inicio) from Oferta where morada = new.morada and codigo = new.codigo into dataInicioAnterior;

select data_fim	 from Oferta where morada = new.morada and codigo = new.codigo and data_inicio = dataInicioAnterior into dataFimAnterior;

if timestampdiff(second, new.data_inicio, new.data_fim) < 0 then
call raise_error;


if timestampdiff(second,new.data_inicio,dataInicioAnterior) < 0 and timestampdiff(second,new.data_fim,dataFimAnterior) < 0 then
/*new.data_inicio >= dataInicioAnterior and new.data_fim <= dataFimAnterior then
*/
CALL raise_error;
END IF;



END IF;

END; //
delimiter ;
