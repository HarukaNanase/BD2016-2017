DROP TRIGGER if exists lastState;
delimiter //
CREATE TRIGGER lastState before insert on Paga FOR EACH ROW
BEGIN
declare ultimo datetime;
declare aintroduzir datetime;

SELECT max(tempo) from Estado where numero = new.numero into ultimo;
/*insert into Teste values (ultimo, new.tempo, timestampdiff(second,ultimo,new.tempo));
*/
IF timestampdiff(second,ultimo,new.tempo) <= 0
THEN
CALL raise_error;
END IF;



END; //

delimiter ;	
