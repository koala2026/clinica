CREATE DATABASE bdsel;

USE bdsel;

CREATE TABLE cursos(codigo int(10), nombrecurso VARCHAR(30),mail VARCHAR (30)
);

INSERT INTO cursos(codigo, nombrecurso) VALUE(352,"carlos","laura@gmail.com");

drop Table cursos;

CREATE TABLE alumnos(codigo int(20),nombre VARCHAR(30),mail VARCHAR(30));

INSERT INTO alumnos(codigo,nombre,mail)VALUES(1,"carlos","laura@gmail.com");