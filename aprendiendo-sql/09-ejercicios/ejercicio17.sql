/* 
Listado de encargos realizados
por el cliente 'Fruteria Antonia Inc'
 */

SELECT *
FROM encargos e
INNER JOIN clientes c
ON e.cliente_id = c.id
WHERE c.nombre = 'Fruteria Antonia Inc';