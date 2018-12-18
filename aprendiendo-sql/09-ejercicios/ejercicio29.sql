/* 
crear una vista llamada VendedoresA, que incluira todos los vendedores del grupo con nombre
vendedores a
 */

CREATE VIEW vendedoresA AS
SELECT v.nombre 
FROM vendedores v
INNER JOIN grupos g
ON v.grupo_id = g.id
WHERE g.nombre='Vendedores A';
