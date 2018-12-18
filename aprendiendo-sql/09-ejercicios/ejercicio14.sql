/* 
Visualizar las unidades totales 
vendidas de cada coche a cada cliente

Mostrando el nombre del coche, numero de cliente y 
la suma de unidades 
 */

SELECT COUNT(e.id), co.modelo, cl.nombre
FROM encargos e
INNER JOIN coches co
ON e.coche_id = co.id 
INNER JOIN clientes cl
ON e.cliente_id = cl.id
GROUP BY e.cliente_id;