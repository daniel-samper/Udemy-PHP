/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  danielsamper
 * Created: 29 oct. 2023
 */

/*
13.- Sacar la media de sueldos entre todos los vendedores por grupo
*/

select grupo_id, avg(sueldo) from vendedores group by grupo_id;

# Mostrando nombre de grupo y ciudad #
select ceil(avg(v.sueldo)) as 'media salarial', g.nombre,g.ciudad from vendedores v
inner join grupos g on g.id = v.grupo_id
group by grupo_id;