/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  danielsamper
 * Created: 29 oct. 2023
 */

/*
16.- Obtener un listado de clientes atendidos por el vendedor David Lopez
*/

select * from clientes where vendedor_id in
(select id from vendedores where nombre = 'David' AND apellidos = 'Lopez');