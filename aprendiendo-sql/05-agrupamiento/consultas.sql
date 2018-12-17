# AGRUPAMINETO #
SELECT COUNT(titulo) AS 'CANT',categoria_id FROM entradas GROUP BY categoria_id;

# AGRUPAMINETO CON CONDICIONES #
SELECT COUNT(titulo) AS 'CANT',categoria_id 
FROM entradas 
GROUP BY categoria_id HAVING COUNT(categoria_id)>=4;

/* 
AVG     Sacar la media
COUNT   Contar el numero de elementos
MAX     Valor Maximo del grupo
MIN     Valor Minimo del grupo
SUM     Sumar todo el contenido del grupo

*/
SELECT AVG(id) from entradas;
SELECT MAX(id) from entradas;
SELECT MIN(id) from entradas;
SELECT SUM(id) from entradas;