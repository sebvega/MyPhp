CREATE DATABASE notas_master;
use notas_master;

CREATE TABLE usuarios(
id int(255) AUTO_INCREMENT NOT NULL,
nombre varchar(100) NOT NULL,
apellidos varchar(100) NOT NULL,
email varchar(255) NOT NULL,
password varchar(255) NOT NULL,
fechaRegistro DATE NOT NULL,
CONSTRAINT pk_usuarios PRIMARY KEY (id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;


CREATE TABLE notas(
id int(255) AUTO_INCREMENT NOT NULL,
usuarios_id int(255) NOT NULL,
titulo varchar(100) NOT NULL,
descripcion MEDIUMTEXT NULL,
fecha DATE NOT NULL,
CONSTRAINT pk_entradas PRIMARY KEY (id),
CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuarios_id) REFERENCES usuarios(id)
)ENGINE=InnoDB;

