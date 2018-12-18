/* 
Visualizar todos los coches cuya marca contenga la letra "A"
Y cuyo modelo comience por F
 */

SELECT * FROM coches
WHERE marca LIKE '%a%'
AND modelo LIKE 'f%';