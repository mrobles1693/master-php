/* 
 SUBCONSULTA:
- Consultas ejecutadas dentro de otras.
- Consiste en utilizar los resultados de una consulta para usarlo dentro de otras.
- Se utilizan las claves foraneas.
 */


SELECT * FROM usuarios WHERE id IN(SELECT usuario_id from entradas);

SELECT nombre, apellidos FROM usuarios WHERE id
IN(
SELECT usuario_id FROM entradas WHERE titulo LIKE '%GTA%'
);

# Sacar las entradas de la categoria accion buscando por su nombre #
SELECT * FROM entradas WHERE categoria_id
IN(
SELECT id FROM categorias WHERE nombre = 'Acción'
);

# Categoria con más de 3 entradas #
SELECT * FROM categorias where id 
IN( SELECT categoria_id from entradas GROUP BY categoria_id having count(categoria_id) > 3);

SELECT nombre, apellidos FROM usuarios where id = (
SELECT usuario_id from entradas GROUP BY usuario_id order by COUNT(usuario_id) DESC LIMIT 1
);