CREATE DATABASE clinica;

use clinica;

CREATE TABLE pacientes(
    codigo int(19),
    nombre VARCHAR(30),
    habitacion int(10)
); 
INSERT INTO pacientes(codigo,nombre,habitacion) VALUE(3,"carlos",1);