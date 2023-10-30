/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  danielsamper
 * Created: 29 oct. 2023
 */

/*
18.- Listar los clientes que han hecho algún encargo del coche Mercedes Ranchera
*/

SELECT * FROM clientes where id in 
(select cliente_id from encargos WHERE coche_id in 
(select id from coches where modelo like 'Mercedes ranchera%'));