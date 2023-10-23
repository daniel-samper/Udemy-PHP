/* 
CREAR TABLA

int(nº de cifras) ENTERO
integer
varchar(nº de caracteres) STRING / ALFANUMERICO max. 255
char(nº de caracteres) STRING / ALFANUMERICO
float(nº de cifras,nº de decimales) Nº coma flotante
date
TINYTEXT – 255 Bytes (255 characters)
TEXT – 64KB (65,535 characters)
MEDIUMTEXT – 16MB (16,777,215 characters)
LONGTEXT – 4GB (4,294,967,295 characters)

 */

CREATE TABLE usuarios(
id          int(11) auto_increment not null,
nombre      varchar(100) not null,
apellidos   varchar(255) default 'hola que tal',
email       varchar(100) not null,
password    varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id)
);