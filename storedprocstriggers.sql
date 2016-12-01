DROP TRIGGER if exists lastState;

delimiter //
CREATE TRIGGER lastState before insert on paga FOR EACH ROW
BEGIN
declare ultimo datetime;

SELECT max(time_stamp) from estado where numero = new.numero into ultimo;
/*insert into Teste values (ultimo, new.`data`, timestampdiff(second,ultimo,new.`data`));
*/
IF timestampdiff(second,ultimo,new.`data`) <= 0
THEN
CALL raise_error;
END IF;



END; //





DROP TRIGGER IF EXISTS overlappedDates;

delimiter //

CREATE TRIGGER overlappedDates before insert on oferta FOR EACH ROW

BEGIN

declare exist int default 0;

SELECT Count(B.codigo)
FROM (
		(SELECT codigo,morada, data_inicio, data_fim
			FROM oferta as O
			WHERE
				( O.codigo = new.codigo
				and O.morada = new.morada
				and 
					(new.data_fim between O.data_inicio AND O.data_fim
						OR new.data_inicio between O.data_inicio and O.data_fim)
				OR
					(O.data_fim between new.data_inicio AND new.data_fim
						OR O.data_inicio between new.data_inicio and new.data_fim)
				)
		) AS B
	) into exist;

IF exist > 0 OR (timestampdiff(second,new.data_fim,new.data_inicio)>0) THEN
CALL raise_error;
END if;
END; //
delimiter ;

