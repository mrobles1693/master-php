/* 
 SUBCONSULTA:
- Consultas ejecutadas dentro de otras.
- Consiste en utilizar los resultados de una consulta para usarlo dentro de otras.
- Se utilizan las claves foraneas.
 */


SELECT * FROM usuarios WHERE id IN(SELECT usuario_id from entradas);