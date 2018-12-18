/*
Mostrar todos los vendedores con nombre y número de días que llevan en el concesionario.
*/

SELECT nombre, DATEDIFF(CURDATE(), fecha) AS 'Días' FROM vendedores;