/* 
Encargos con nombre del coche, nombre del cliente y nombre de ciudad
pero que solo sean de Barcelona
 */

SELECT co.modelo, c.nombre, c.ciudad
FROM encargos e
INNER JOIN coches co
ON co.id = e.coche_id
INNER JOIN clientes c
ON c.id = e.cliente_id
WHERE c.ciudad = 'Barcelona';
