/* 
Listar vendedores y cantidad de clientes, tengan o no clientes
 */

SELECT v.nombre, v.apellidos, COUNT(c.id) FROM vendedores v
LEFT JOIN clientes c ON c.vendedor_id = v.id
GROUP BY v.id;