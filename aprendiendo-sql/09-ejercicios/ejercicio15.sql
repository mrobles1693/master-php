/* 
MOSTRAR LOS CLIENTES CON MÁS PEDIDO Y CUANTOS HICIERON
 */

SELECT c.nombre, COUNT(e.cliente_id) 
FROM encargos e
INNER JOIN clientes c
ON e.cliente_id = c.id
GROUP BY e.cliente_id DESC;