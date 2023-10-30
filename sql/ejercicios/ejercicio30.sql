/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  danie
 * Created: 30 oct 2023
 */
/*
30.- Mostrar los datos del vendedor con más antigüedad en el concesionario
*/

select * from vendedores order by fecha asc limit 1;

/*
30 plus Obtener los datos de los coches con más unidades vendidas
*/
select * from coches where id in
(select coche_id from encargos e where cantidad in
(select max(cantidad) from encargos));
