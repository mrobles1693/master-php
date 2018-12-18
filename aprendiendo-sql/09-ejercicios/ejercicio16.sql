/* 
Listado de clientes atendidos por 'Davis Lopez'
 */

SELECT c.nombre
FROM clientes c
INNER JOIN vendedores v
ON c.vendedor_id = v.id
WHERE v.nombre = 'DAVID' AND v.apellidos = 'LOPEZ';
