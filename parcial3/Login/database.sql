create DATABASE usuarios;
USE usuarios;
CREATE TABLE usuarios(
  id int(11) NOT NULL  PRIMARY KEY IDENTITY,
  Usuario varchar(200) NOT NULL,
  Nombre varchar(200) NOT NULL,
  Contraseña varchar(200) NOT NULL,
 
);


--En el mismo programa se pueden registrar usuarios (yo lo hice de ese modo para cifrar las contraseñas) pero estos son los usuarios que tenia para probar el proyecto--
INSERT INTO usuarios ('id', 'Usuario', 'Nombre', 'Contraseña') VALUES
(66, 'Gerardo', 'Gerardo Pineda', '$2y$10$cthizryd9J5GRwYzdBJX3OlXmuv1D/va8tgFSB/c4wW82FFpdDNka'), --Contraseña es Pineda
(81, 'Martin', 'Martin Cabrera', '$2y$10$7.r5S2FgtWd2x60QSt6Vc.dvTY5tUuk/VQTXvWuBm5Gq5HEQbhoJS'); --Constraseña es Cabrera


