/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  Daniel
 * Created: 25 oct 2023
 */

# SUBCONSULTAS #
#Sacar usuarios con entradas#
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas):
SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas):

#Sacar los usuarios con entradas de titulo con GTA#
SELECT nombre, apellidos FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE titulo LIKE "%GTA%")

#Sacar todas las entradas de la categoría acción usando su nombre#
SELECT titulo FROM entradas WHERE categoria_id IN (SELECT id FROM categorias WHERE nombre = 'Accion');

#Mostrar las categorías con 3 o más entradas#
SELECT nombre FROM categorias WHERE 
id IN
(SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id)>=3);

#Mostrar los usuarios que crearon una entrada un martes#
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha)=3);

#Mostrar el nombre del usuario que tenga más entradas#
SELECT nombre FROM usuarios WHERE id IN 
(SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

#Mostrar las categorias sin entradas#
SELECT * FROM categorias WHERE id NOT IN 
(SELECT categoria_id FROM entradas);