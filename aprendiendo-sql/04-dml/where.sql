/*
OPERADORES DE COMPARACION
Igual           =
Diferente       !=
Menor           <
Mayor           >
Menor o Igual   <=
Mayor o Igual   >=

Entre           between A and B
Dentro          in
Es nulo         is null
No nulo         is not null
Como            like
No es como      not like

OPERADORES LOGICOS
O   OR
Y   AND
NO  NOT

COMODINES
Culaquier cantidad de caracteres: %
Un caracter desconocido: _

*/

SELECT * FROM usuarios WHERE email = 'mario@robles.com'; 

SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2018 OR is null;

SELECT * FROM usuarios WHERE apellidos LIKE '%a%';

SELECT * FROM usuarios WHERE (YEAR(fecha)%2) = 0;

SELECT UPPER(nombre), apellidos FROM usuarios WHERE (LENGTH(nombre)>=5) AND (YEAR(fecha)<2020);