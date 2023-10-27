/* 
6.- Visualizar el nombre y los apellidos de los vendedores en una misma columna,
su fecha de registro y el dia de la semana en que se registraron
 */
select concat(nombre, "  " , apellidos) as vendedor, fecha, dayname(fecha) from vendedores;

