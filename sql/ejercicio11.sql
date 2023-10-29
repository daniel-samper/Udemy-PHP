/* 
11.- Visualizar todos los cargos y el número de vendedores que hay en cada cargo
 */
/**
 * Author:  danielsamper
 * Created: 29 oct. 2023
 */

select cargo, count(id) from vendedores group by cargo;