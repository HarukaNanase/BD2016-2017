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
