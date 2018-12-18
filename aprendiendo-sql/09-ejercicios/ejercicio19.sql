/* 
Vendedores con más de 2 clientes
 */

SELECT v.nombre, COUNT(c.id)
FROM clientes c
INNER JOIN vendedores v
ON c.vendedor_id = v.id
GROUP BY c.vendedor_id
HAVING COUNT(c.id)>=2;
