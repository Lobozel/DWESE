create table usuarios(
    id int unsigned auto_increment primary key,
    nombre varchar(80) not null,
    foto varchar(50)
);
insert into usuarios(nombre, foto) values('usuario', '../resources/img/user.png');