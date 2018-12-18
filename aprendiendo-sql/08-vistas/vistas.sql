/*
Vistas
Constante almacenada en la base de datos que se utiliza como tabla virtual.

No almacena datos, sino que utiliza asociaciones y los datos originales de 
las tablas. De esta forma siempre se mantiene actualizada.
*/

CREATE VIEW entradas_con_nombres AS
SELECT e.id, e.titulo, u.nombre, c.nombre
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;
