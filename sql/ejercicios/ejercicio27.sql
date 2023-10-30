/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  danie
 * Created: 30 oct 2023
 */
/*
27.- Visualizar los nombres de los clientes y la cantidad de encargos realizados
incluyendo los que no hayan realizado encargos
*/

select c.nombre, count(e.id) from clientes c
left join encargos e on c.id = e.cliente_id
group by 1;
