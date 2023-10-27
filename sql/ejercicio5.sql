/* 
5.- Mostrar todos los vendedores con su nombre y el nº de dias que llevan en el 
concesionario
 */

select nombre, apellidos, DATEDIFF(current_date(), fecha) AS Dias from vendedores;