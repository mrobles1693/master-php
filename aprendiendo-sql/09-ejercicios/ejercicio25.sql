/* 
Lista de  los nombres de los clientes con el importe de encargos acumulados.
 */

SELECT ci.nombre, SUM(c.precio*e.cantidad) AS 'IMPORTE'
FROM clientes ci
INNER JOIN encargos e
ON e.cliente_id = ci.id
INNER JOIN coches c
ON e.coche_id = c.id
GROUP BY ci.nombre;