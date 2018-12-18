/* 
Visualizar los nombre de los clientes y la cantidad de encargos realizados, incluyendo los que no hayan realizado encargos

 */

SELECT c.nombre, COUNT(e.id)
FROM clientes c
LEFT JOIN encargos e
ON c.id = e.cliente_id
GROUP BY e.id;