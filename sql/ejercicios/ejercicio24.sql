/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  danie
 * Created: 30 oct 2023
 */
/*
24.- Listar los encargos con el nombre del coche el nombre del cliente y el nombre
de la ciudad del cliente pero únicamene cuando sean de Madrid
*/

select e.id, co.modelo, c.nombre, c.ciudad from encargos e 
inner join coches co on co.id = e.coche_id 
inner join clientes c on c.id = e.cliente_id
where c.ciudad = 'Barcelona'; 


