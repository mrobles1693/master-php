/* 
Mostrar listado de clientes (número de cliente y el nombre), 
con numero de vendedor y su nombre
 */

SELECT c.id, c.nombre, v.id, v.nombre
FROM clientes c
INNER JOIN vendedores v
ON c.vendedor_id = v.id;