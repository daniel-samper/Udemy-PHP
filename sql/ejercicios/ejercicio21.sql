/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  danie
 * Created: 30 oct 2023
 */
/*
21.- Obtener los nombre y las ciudades de los clientes que tengan encargos
*/

select nombre, ciudad from clientes where id in
(select cliente_id from encargos where cantidad >= 3)
