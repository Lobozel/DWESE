drop table if exists relaciones;
drop table if exists usuarios;
-- Tabla usuarios para validarnos
create table usuarios(
	nombre varchar(15) primary key,
	pass varchar(255) not null,
	perfil int not null default 1
);
insert into usuarios values('admin_1', sha2('secretoAdmin', 256), 100);
insert into usuarios values('usuario', sha2('secretoUsuario', 256), 1);

-- Tabla Videojuegos


create table if not exists juegos(
    id int auto_increment primary key,
    nombre varchar(30) not null,
    descripcion text not null,
    dificultad int,
    caratula varchar(50) default "recursos/img/generica.jpeg",
    created_at timestamp default current_timestamp,
	updated_at timestamp null default null
);
-- Trigger parea el update_at

create trigger actualiazavideo before update on juegos
for each row set new.updated_at=now();

-- Tabla Plataforma
create table if not exists plataformas(
    id int auto_increment primary key,
    nombre varchar(50) not null,
    imagen varchar(60) default "recursos/img/consola.jpeg" 

);
-- Tabla Relacion
create table if not exists relaciones(
	 idR int auto_increment primary key,
    idJuego int,
    idPlataforma int,
    precio float(5,2),
    constraint fk_rel_ju foreign key(idJuego) references juegos(id) on update cascade on delete cascade,
    constraint fk_rel_pla foreign key(idPlataforma) references plataformas(id) on update cascade on delete cascade
);
-- ------------------------
insert into plataformas(nombre) values('MAC');
insert into plataformas(nombre) values('PC WINDOWS');
insert into plataformas(nombre) values('PS4');
insert into plataformas(nombre) values('XBOX');
insert into plataformas(nombre) values('XBOX ONE');
insert into plataformas(nombre) values('Nintendo WII');
insert into plataformas(nombre) values('Nintendo WII U');
-- --------------------------------------------------------------
insert into juegos(nombre, descripcion, dificultad, updated_at)
 values('Fornite', 'Fortnite es un videojuego del año 2017 desarrollado por la empresa Epic Games, lanzado como diferentes paquetes de software que presentan diferentes modos de juego, pero que comparten el mismo motor general de juego y las mecánicas. Fue anunciado en los Spike Video Game Awards en 2011. ', 3, now());
-- ----------------------------
insert into relaciones(idJuego, idPlataforma, precio) values(1,1,23);
insert into relaciones(idJuego, idPlataforma, precio) values(1,2,12.50);
insert into relaciones(idJuego, idPlataforma, precio) values(1,3,0);

Arriba
