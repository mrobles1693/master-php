/* 
Sacar el promedio de sueldos de vendedores por grupo
 */

SELECT AVG(sueldo)
FROM vendedores
GROUP BY grupo_id;

SELECT AVG(v.sueldo), g.nombre, g.ciudad
FROM vendedores v
INNER JOIN grupos g
ON g.id = v.grupo_id
GROUP BY group_id;