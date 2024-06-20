
create database ll;
use ll;


create table tb_usuarios(
documento int not null,
nombre varchar(200),
password varchar(200),
fecha_nacimineto date,
imagen_url varchar(255) DEFAULT NULL,
primary key (documento));



