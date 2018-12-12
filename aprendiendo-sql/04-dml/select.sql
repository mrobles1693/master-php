# MOSTRAR TODOS LOS REGISTROS DE UNA TABLA #
select * from usuarios;

# MOSTRAR ALGUNOS CAMPOS DE LOS REGISTROS DE UNA TABLA #
select email, nombre, apellidos from usuarios;

# Mostrar select ordenado #
select email, nombre, apellidos from usuarios ORDER BY nombre;

# OPERADORES ARITEMTICOS Suma + Resta - Multiplicacion * Division / Resto %#
select email, (4+7) AS 'OPERACION' from usuarios;

# FUNCIONES SQL, Ejemplo con la funcion CEIL puedes redondear un número#
SELECT CEIL(7.58) AS numero from usuarios;

# FUNCIONES SQL PARA TEXTO #
# UPPER(valor) colocar todo en mayusculas #
SELECT UPPER(nombre) from usuarios;
# LOWER(valor) colocar todo en minusculas #
SELECT LOWER(apellidos) from usuarios;
# CONCAT(valor) concatenar caracteres #
SELECT CONCAT(nombre, ' ', apellidos) AS 'Nombre Completo' from usuarios;
# TRIM(valor) elimina espacion de más #
SELECT TRIM(CONCAT('     ',nombre, ' ', apellidos, '        ')) AS 'Nombre Completo' from usuarios;
# LENGTH(valor) cuenta los caracteres #
SELECT CONCAT(nombre, ' ', apellidos) AS 'Tamaño' from usuarios;


# FUNCIONES SQL PARA FECHA #
# FECHA ACTUAL #
SELECT CURDATE() AS 'Fecha Actual';
# DIFERENCIA DE FECHAS#
SELECT DATEDIFF(fecha, CURDATE()) AS 'Diferencia' from usuarios;
# NOMBRE DIA DE LA SEMANA#
SELECT DAYNAME(fecha) AS 'Nombre de día de la semana' from usuarios;
# DIA DEL MES#
SELECT DAYOFMONTH(fecha) AS 'Dia del mes' from usuarios;
# DIA DE LA SEMANA#
SELECT DAYOFWEEK(fecha) AS 'Dia de la semana' from usuarios;
# DIA DEL AÑO#
SELECT DAYOFYEAR(fecha) AS 'Dia del año' from usuarios;
# OBTENER SOLO EL MES#
SELECT MONTH(fecha) AS 'MES' from usuarios;
# OBTENER SOLO EL AÑO#
SELECT YEAR(fecha) AS 'AÑO' from usuarios;

# FECHA Y HORA DEL SISTEMA #
SELECT SYSDATE() AS 'Hora Actual del servidor';
# FORMATO FECHA Y HORA DEL SISTEMA #
SELECT DATE_FORMAT(fecha, '%d-%m-%Y' ) AS 'Hora con Formato' from usuarios;

# SOLO HORA ACTUAL #
SELECT CURTIME() AS 'Hora Actual';

# FUNCIONES GENERALES #
#  #