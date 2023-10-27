/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  Daniel
 * Created: 24 oct 2023
 */

# MOSTRAR TODOS REGISTROS / FILAS DE UNA TABLA #
SELECT email, nombre, apellidos FROM usuarios;

# MOSTRAR TODOS LOS CAMPOS #
SELECT * FROM usuarios;

# OPERADORES ARITMETICOS #
SELECT id, email, (id+7) AS 'OPERACION' FROM usuarios ORDER BY id;

# FUNCIONES MATEMATICAS #
SELECT ABS(7) AS 'OPERACION' FROM usuarios;
SELECT CEIL(7,34) AS 'OPERACION' FROM usuarios;
SELECT FLOOR(7,34) AS 'OPERACION' FROM usuarios;
SELECT PI() AS 'OPERACION' FROM usuarios;
SELECT RAND() AS 'OPERACION' FROM usuarios;
SELECT ROUND(7.91,1) AS 'OPERACION' FROM usuarios;
SELECT SQRT(7.91) AS 'OPERACION' FROM usuarios;
SELECT TRUNCATE(7.91,1) AS 'OPERACION' FROM usuarios;

# FUNCIONES PARA TEXTO #
SELECT UPPER(nombre) FROM usuarios;
SELECT LOWER(nombre) FROM usuarios;
SELECT CONCAT(nombre,' ',apellidos) AS 'CONVERSION' FROM usuarios;
SELECT UPPER(CONCAT(nombre,' ',apellidos)) AS 'CONVERSION' FROM usuarios;
SELECT LENGTH(CONCAT(nombre,' ',apellidos)) AS 'CONVERSION' FROM usuarios;
SELECT CONCAT('',nombre,' ',apellidos,'') AS 'CONVERSION' FROM usuarios;

