/* 1 */
SELECT DISTINCT morada, codigo_espaco
FROM posto
WHERE codigo not in (SELECT codigo from aluga natural join posto);

/*
+--------+---------------+
| morada | codigo_espaco |
+--------+---------------+
| FEUP   | DEG           |
| IST    | DEI           |
+--------+---------------+
2 rows in set (0.00 sec)
*/

/* 2 */ 

SELECT morada, count(concat(numero,codigo)) AS reservas
FROM aluga AS B 
GROUP BY morada 
HAVING reservas>
(SELECT avg(reservas)
FROM (SELECT morada, count(concat(numero,codigo)) AS reservas
FROM aluga AS C 
GROUP BY morada)
AS D);
/*
+--------+----------+
| morada | reservas |
+--------+----------+
| IST    |        5 |
+--------+----------+
1 row in set (0.00 sec)

*/

/* 3 */


SELECT nif,nome,count(nif) as vezes 
FROM ( 
SELECT morada,nif,nome 
FROM arrenda NATURAL JOIN fiscaliza NATURAL JOIN user AS B 
GROUP BY nif,id )AS A
GROUP BY nif 
HAVING vezes = 1;
/*
+-----------+-------------+-------+
| nif       | nome        | vezes |
+-----------+-------------+-------+
| 123456719 | Jorge Poeta |     1 |
+-----------+-------------+-------+
*/


/* 4 */

SELECT morada,codigo,sum((timestampdiff(day,data_inicio,data_fim)+1)*tarifa) as total
FROM aluga NATURAL JOIN oferta NATURAL JOIN paga NATURAL JOIN espaco
WHERE YEAR(data) = '2016'
GROUP BY morada,codigo 
UNION
(
SELECT morada,codigo_espaco as codigo,sum((timestampdiff(day,data_inicio,data_fim)+1)*tarifa) as total
FROM aluga NATURAL JOIN oferta NATURAL JOIN posto NATURAL JOIN paga
WHERE YEAR(data) = '2016'
GROUP BY morada,codigo_espaco
)
ORDER BY morada;
 

);
/*

+----------+---------+-----------+
| morada   | codigo  | total     |
+----------+---------+-----------+
| Catolica | Central |  527.0000 |
| Catolica | DMKT    |  186.0000 |
| FEUP     | DEG     |  775.0000 |
| FEUP     | Central |  743.6900 |
| ISEL     | Central | 5251.0000 |
| IST      | Central |  619.6900 |
| IST      | DEG     | 1239.6900 |
| IST      | DEI     | 1549.6900 |
| IST      | DEQ     |  929.6900 |
+----------+---------+-----------+
9 rows in set (0.01 sec)

*/





/* 5 */
