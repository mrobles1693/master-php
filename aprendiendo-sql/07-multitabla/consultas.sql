SELECT e.titulo, u.nombre, c.nombre
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

/* MOSTRAR EL NOMBRE DE LAS CATEGORIAS Y CUANTAS ENTRADAS TIENEN */
SELECT c.nombre, COUNT(e.id) 
FROM categorias c, entradas e 
where e.categoria_id = c.id GROUP BY e.categoria_id;

/* CON LEFT JOIN */
SELECT c.nombre, COUNT(e.id) 
FROM categorias c
LEFT JOIN entradas e
ON e.categoria_id = c.id GROUP BY e.categoria_id;

/* CON RIGHT JOIN */
SELECT c.nombre, COUNT(e.id) 
FROM entradas e
RIGHt JOIN categorias c
ON e.categoria_id = c.id GROUP BY e.categoria_id;

/* MOSTRAR EMAIL Y CANTIDAD DE ENTRADAS */
SELECT u.email, count(e.id) 
FROM usuarios u, entradas e
WHERE e.usuario_id = u.id
GROUP BY e.usuario_id;

/* INNER JOIN */
SELECT e.id, e.titulo, u.nombre, c.nombre
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;