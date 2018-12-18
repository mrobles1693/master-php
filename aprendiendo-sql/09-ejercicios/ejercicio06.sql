/*
Obtener el nombre y apellido en un solo campo de los vendedores, fecha de 
registro y día de la semana.
*/

SELECT CONCAT(nombre, ' ', apellidos) AS 'Nombre Completo', fecha, DAYNAME(fecha)
FROM vendedores;