/* 4 */
SELECT morada,codigo,sum((timestampdiff(day,data_inicio,data_fim)+1)*tarifa) as total_pago
FROM aluga natural join oferta 
GROUP BY morada,codigo 
UNION
SELECT morada,codigo_espaco as codigo,sum((timestampdiff(day,data_inicio,data_fim)+1)*tarifa) as total_pago
FROM aluga natural join oferta natural join posto
GROUP BY morada,codigo_espaco;														
