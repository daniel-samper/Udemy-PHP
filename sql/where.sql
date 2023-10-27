/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  Daniel
 * Created: 24 oct 2023
 */

# CONSULTA CON UNA CONDICION #
SELECT * FROM usuarios WHERE email = 'admin@admin.com';

/*
OPERADORES DE COMPARACIÓN
Igual       =
Distinto     !=
Menor que   <
Mayor que   >
Menor o igual   <=
Mayor o igual   >=
Entre           between A and B
En              in
Es nulo         is null
No nulo         is not null
Como            like
No es como      not like

*/

/*
OPERADORES LÓGICOS
O   OR
Y   AND
NO  NOT
*/

/*
COMODINES:
Cualquier cantidad de caracteres: %
Un caracter desconocido: _
*/

# EJEMPLOS #
# 1.- Mostrar Nombre y Apellidos de todos los usuarios registrados en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2019;

# 2.- Mostrar Nombre y Apellidos de todos los usuarios que no se registraron en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2019 OR ISNULL(fecha);

# 3.- Mostrar el email de los usuarios cuyo apellido contenga la letra A y 
# que sy contraseña sea 1234

SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password = '1234';

# 4.- Sacar todos los registros de la tabla usuarios cuyo año sea PAR
SELECT * FROM usuarios WHERE (YEAR(fecha)%2 = 0;)

# 5.- Sacar todos lso registros de la tabla usuarios cuyo nombre
# tenga más de 5 letras y se haya registrado antes de 2020 y mostrar
# nombre en mayúscula
SELECT UPPER(nombre), apellidos FROM usuarios WHERE LENGTH(nombre) > 5 AND (YEAR(fecha) < 2020);




 


