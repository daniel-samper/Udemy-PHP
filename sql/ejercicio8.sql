/* 
8.- Visualizar todos los coches en cuyo nombre exista la letra A y cuyo modelo
empiece por F
 */
select * from coches where marca Like '%a%' AND modelo LIKE 'f%';
