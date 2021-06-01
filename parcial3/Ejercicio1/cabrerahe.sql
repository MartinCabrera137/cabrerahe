create database cabrerahe;
use cabrerahe;

create table Usuarios
(
    Nombre varchar(50),
    NControl varchar(50) PRIMARY KEY NOT NULL IDENTITY,
    Telefono varchar(50),
    Email varchar(50),
    Carrera varchar(50),
    Contraseña  varchar (50)
);
insert into Usuarios values('Martin Cabrera','18100154','8672424416','18100154@tecnm.mx','Sistemas', 'Contrasena' );
insert into Usuarios values('Pablo Escobar','18100155','8672424417','18100155@tecnm.mx','mecanica', 'Contrasena' );
insert into Usuarios values('Juan Aldama','18100156','8672424418','18100156@tecnm.mx','industrial', 'Contrasena' );
insert into Usuarios values('Pedro Rivera','18100157','8672424419','18100157@tecnm.mx','civil', 'Contrasena' );
