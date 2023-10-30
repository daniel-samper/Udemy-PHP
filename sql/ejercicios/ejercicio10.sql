/* 
10.- Visualizar los apellidos de los vendedores su fecha y su nº de grupo
ordenado por fecha descendente y limitarlo a los 4 últimos.
 */

select apellidos, fecha,grupo_id from vendedores order by fecha desc limit 4;