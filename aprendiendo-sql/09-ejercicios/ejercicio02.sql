/*
Cambiar la comision a 0.5% para los vendedores que ganen más de 50000
*/

UPDATE vendedores SET comision = 0.5 WHERE sueldo >=50000;