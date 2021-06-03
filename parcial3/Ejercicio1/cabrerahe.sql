create database cabrerahe;
use cabrerahe;

create table Estudiantes
(
    Nombre varchar(50),
    NControl INTEGER PRIMARY KEY NOT NULL IDENTITY,
    Telefono integer,
    Email varchar(50),
    Carrera varchar(50),
);
insert into Estudiantes values('Martin Cabrera','18100154','8672424416','18100154@tecnm.mx','Sistemas');
insert into Estudiantes values('Pablo Escobar','18100155','8672424417','18100155@tecnm.mx','mecanica');
insert into Estudiantes values('Juan Aldama','18100156','8672424418','18100156@tecnm.mx','industrial');
insert into Estudiantes values('Pedro Rivera','18100157','8672424419','18100157@tecnm.mx','civil');
