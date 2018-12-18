/* 
Seleccionar el grupo en el que trabaja el vendedor con mayor salario y 
mostrar el nombre del grupo
 */

SELECT * 
FROM grupos g
WHERE g.id IN (
    SELECT grupo id FROM vendedores WHERE sueldo = (
        SELECT MAX(sueldo) FROM vendedores
    )
);