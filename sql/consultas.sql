/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  Daniel
 * Created: 25 oct 2023
 */
# CONSULTAS DE AGRUPAMIENTO #
SELECT titulo FROM entradas GROUP BY categoria_id; 

# CONSULTAS DE AGRUPAMIENTO CON CONDICIONES#
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo)>= 4;

SELECT AVG(id) AS 'Media de entradas' FROM entradas;
SELECT MAX(id) AS 'MÁXIMO ID', titulo FROM entradas;
SELECT MIN(id) AS 'MINIMO ID', titulo FROM entradas;
SELECT SUM(id) AS 'SUMA ID', titulo FROM entradas;