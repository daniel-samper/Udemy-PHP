/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  Daniel
 * Created: 24 oct 2023
 */

# INSERTAR NUEVOS REGISTROS #
INSERT INTO usuarios VALUES(null, 'Victor', 'Apellidos', 'vic@victor.com', '1234', '2023-05-20');
INSERT INTO usuarios VALUES(null, 'Pedro', 'Samper', 'tor@victor.com', '1234', '2023-05-22');
INSERT INTO usuarios VALUES(null, 'Carlos', 'Garcia', 'vicor@victor.com', '1234', '2023-05-21');

# INSERTAR FILAS SOLO CON CIERTAS COLUMNAS #
INSERT INTO usuarios(email, password) VALUES('admin@admin.com','admin');

# INSERT PARA CATEGORIAS #
INSERT INTO categorias VALUES(null, 'Accion');
INSERT INTO categorias VALUES(null, 'Rol');
INSERT INTO categorias VALUES(null, 'Deportes');

# INSERT PARA ENTRADAS #
INSERT INTO entradas VALUES(null, 1, 1, 'GTA 5', 'Review del GTA 5', CURDATE());
INSERT INTO entradas VALUES(null, 1, 2, 'LoL', 'Review del LoL', CURDATE());
INSERT INTO entradas VALUES(null, 1, 3, 'FIFA', 'Review del FIFA', CURDATE());