/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  danielsamper
 * Created: 29 oct. 2023
 */
/*
15.- Mostrar los clientes que más pedidos han hecho y mostrar cuántos hicieron
*/

select cliente_id, count(id) from encargos group by cliente_id order by 2 limit 2;

# multitabla #
select c.nombre, cliente_id, count(e.id) from encargos e
inner join clientes c on c.id = e.cliente_id
group by cliente_id order by 2 limit 2;