/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  danielsamper
 * Created: 29 oct. 2023
 */

/*
17.- Obtener un listado con los encargos realizados por Fruteria Antonia
*/

select * from encargos where cliente_id in 
(select id from clientes where nombre = 'Fruteria Antonia Inc');

select e.id as 'num encargo', cantidad, c.nombre,co.modelo,e.fecha from encargos e
inner join clientes c on c.id = e.cliente_id
inner join coches co on co.id = e.coche_id
where e.cliente_id in 
(select id from clientes where nombre = 'Fruteria Antonia Inc');
