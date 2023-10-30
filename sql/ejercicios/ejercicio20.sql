/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  danie
 * Created: 30 oct 2023
 */
/*
20.- Seleccionar el grupo en el que trabaja el trabajador con mayor 
salario visualizando el nombre del grupo
*/
select * from grupos where id in
(select grupo_id from vendedores where sueldo =
(select max(sueldo) from vendedores));