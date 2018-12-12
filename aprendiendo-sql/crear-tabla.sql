/*
int(n° caracteres)       ENTERO
integer(n° caracteres)   ENTERO (maximo 255)
varchar(n° caracteres)   STRING / ALFANUMERICO (maximo 255)
char(n° caracteres)      STRING / ALFANUMERICO (maximo 255)
float(n° cifras, n° decimales)  DECIMAL/COMA FLOTANTE
date, time, timestamp

STRING MÁS GRANDES
TEXT 65535 caracteres
MEDIUMTEXT 16 millones
LONGTEXT 4 billones de caracteres

ENTEROS MÁS GRANDES
MEDIUMINT
BIGINT
*/

CREATE TABLE usuarios(
id          int(11)         not null auto_incremet,
nombre      varchar(100)    not null,
apellidos   varchar(255)    default 'Hola que tal',
email       varchar(100)    not null,
password    varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id)
);