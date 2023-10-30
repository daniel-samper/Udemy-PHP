/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  danie
 * Created: 30 oct 2023
 */
/*
23.- Listar todos los encargos realizados con la marca del coche y el nombre del
cliente
*/

select e.id, co.marca, c.nombre from encargos e
inner join coches co on co.id = e.coche_id
inner join clientes c on c.id = e.cliente_id;

