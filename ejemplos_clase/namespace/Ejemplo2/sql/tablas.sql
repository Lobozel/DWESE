create table usuarios(
    id int unsigned auto_increment primary key,
    nombre varchar(80) not null,
    direction varchar(100),
    mail varchar(60) unique not null,
    web varchar(100),
    description text not null
);