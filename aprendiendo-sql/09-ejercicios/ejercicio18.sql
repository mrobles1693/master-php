/* 
CLIENTES QUE HAN HECHO
ENCARGO DEL COCHE 'Mercedez Ranchera'
 */

SELECT c.nombre
FROM encargos e
INNER JOIN clientes c
ON c.id = e.cliente_id
INNER JOIN coches co
ON co.id = e.coche_id
WHERE co.modelo = 'Mercedes Ranchera';