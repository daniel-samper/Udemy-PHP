/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  Daniel
 * Created: 26 oct 2023
 */

/*
2.-Modificar la comisión de los vendedores y ponerla al 0.5% cuando ganan
más de 50.000
*/

update vendedores set comision = 0.5 where sueldo>=50000;