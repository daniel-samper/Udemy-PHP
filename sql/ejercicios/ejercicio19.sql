/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  danie
 * Created: 30 oct 2023
 */

/*
19.- Obtener los vendedores con dos o más clientes
*/

select * from vendedores where id in 
(select vendedor_id from clientes group by vendedor_id having count(id)>=2 ); 