/* 
Visualizar Apellidos de vendedores Fecha y Grupo
Ordenado Fecha Descendente, mostrar los 4 ultimos
 */

SELECT apellidos, fecha, grupo_id 
FROM vendedores 
ORDER BY fecha DESC LIMIT 4;