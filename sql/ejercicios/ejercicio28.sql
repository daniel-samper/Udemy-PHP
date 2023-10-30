/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  danie
 * Created: 30 oct 2023
 */

/*
28.- Listar los vendedores y el nº de cientes.
Se deben mostrar tengan o no clientes;
*/

select v.nombre, v.apellidos, count(c.id) from vendedores v
left join clientes c on c.vendedor_id = v.id
group by v.id;