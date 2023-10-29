/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  danielsamper
 * Created: 29 oct. 2023
 */

/* 
14.- Visualizar las unidades totales vendidas de cada coche a cada cliente
mostrando el nombre del producto, el nº del cliente y la suma de unidades
*/
select c.modelo as 'coche', cl.nombre as 'cliente', sum(e.cantidad) as 'unidades' from encargos e
inner join coches c on c.id = e.coche_id
inner join clientes cl on cl.id = e.cliente_id
group by e.coche_id, e.cliente_id;
