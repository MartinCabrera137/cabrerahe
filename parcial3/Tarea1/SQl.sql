create database W18100154;
use W18100154

create table Usuarios
(
    Nombre varchar(50),
    NControl varchar(50) PRIMARY KEY NOT NULL,
    Telefono varchar(50),
    Email varchar(50),
    Carrera varchar(50),
    Contraseña  varchar (50)
);
insert into Usuarios values('Martin Cabrera','18100154','8672424416','18100154@tecnm.mx','Sistemas' );