SELECT e.titulo, u.nombre, c.nombre
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

SELECT c.nombre, COUNT(e.id) 
FROM categorias c, entradas e 
where e.categoria_id = c.id GROUP BY e.categoria_id;

SELECT u.email, count(e.id) 
FROM usuarios u, entradas e
WHERE e.usuario_id = u.id
GROUP BY e.usuario_id;