/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  danie
 * Created: 30 oct 2023
 */
/* 25.- Obtener una lista de lso nombre de los clientes con el importe de sus 
encargos acumulado
*/
select ci.nombre, sum(precio*cantidad) as 'Importe' 
from clientes ci
inner join encargos e on ci.id = e.cliente_id
inner join coches co on e.coche_id = co.id
group by ci.nombre
order by 2 asc;