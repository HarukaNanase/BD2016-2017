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







/* 4 */

SELECT morada,codigo,sum((timestampdiff(day,data_inicio,data_fim)+1)*tarifa) as total_pago
FROM aluga natural join oferta 
GROUP BY morada,codigo 
HAVING concat(morada,codigo)
NOT IN (SELECT concat(morada,codigo)
FROM posto)
UNION
(
SELECT morada,codigo_espaco as codigo,sum((timestampdiff(day,data_inicio,data_fim)+1)*tarifa) as total_pago
FROM aluga natural join oferta natural join posto
GROUP BY morada,codigo_espaco
);
/*

+----------+---------+------------+
| morada   | codigo  | total_pago |
+----------+---------+------------+
| Catolica | Central |   527.0000 |
| FEUP     | Central |   743.6900 |
| ISEL     | Central |  5251.0000 |
| ISEL     | DEI     |   899.0000 |
| IST      | Central |   619.6900 |
| IST      | DEG     |  1239.6900 |
| IST      | DEI     |  2949.4100 |
| IST      | DEQ     |   929.6900 |
| Catolica | DMKT    |   186.0000 |
| FEUP     | DEG     |   775.0000 |
+----------+---------+------------+
10 rows in set (0.01 sec)

*/





/* 5 */
