/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  danie
 * Created: 30 oct 2023
 */
/*
22.- Obtener un listado de clientes mostrando id, nombre y el id y nombre del
vendedor
*/

select c.id, c.nombre, v.id, concat(v.nombre, '  ',v.apellidos) 
from clientes c, vendedores v 
where c.vendedor_id = v.id;  

