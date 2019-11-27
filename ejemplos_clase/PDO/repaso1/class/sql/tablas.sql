drop database if exists prueba27;
create database prueba27;
use prueba27;
create user 'prueba'@'localhost' identified by 'secreto';
grant all on prueba27.* to 'prueba'@'localhost';
drop table if exists coches;
create table coches(
id int auto_increment primary key,
marca varchar(40) not null,
modelo varchar(40) not null,
color varchar(40) not null,
kmts int default 1500
);
--Valores
insert into coches(marca, modelo, color) values('Seat','Ibiza','Rojo');
insert into coches(marca, modelo, color) values('Seat','Arona','Blanco');
insert into coches(marca, modelo, color) values('Renault','Meganne','Rojo');
insert into coches(marca, modelo, color) values('Renault','Clio','Rojo');
insert into coches(marca, modelo, color) values('Ford','Focus','Blanco');
insert into coches(marca, modelo, color) values('Ford','Fiesta','Blanco');
insert into coches(marca, modelo, color) values('Citroen','C4','Rojo');
insert into coches(marca, modelo, color) values('Citroen','C3','Azul');