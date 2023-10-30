/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  danie
 * Created: 30 oct 2023
 */
/*
29.- Crear una vista llamada vendedoresA que incluirá todos los vendedores del
grupo que se llama Vendedores A
*/

create view vendedoresA as 
select * from vendedores where grupo_id in
(select id from grupos where nombre = "Vendedores A");

