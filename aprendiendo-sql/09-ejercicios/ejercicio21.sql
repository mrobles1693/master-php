/* 
Obtener los nombre y ciudades de clientes con encargos de 3 unidades a más
 */

SELECT c.nombre, c.ciudad
FROM clientes c
INNER JOIN encargos e
ON c.id = e.cliente_id
WHERE e.cantidad >=3;
