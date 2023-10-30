/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  danie
 * Created: 30 oct 2023
 */
/*
26.- Sacar vendedores que tienen jefe y sacar el nombre del jefe
*/

select v1.nombre as 'vendedor', v2.nombre as 'jefe' from vendedores v1
inner join vendedores v2 on v1.jefe = v2.id
