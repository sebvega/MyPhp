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


CREATE TABLE categorias(
id int(255) AUTO_INCREMENT NOT NULL,
nombre varchar(255),
CONSTRAINT pk_categorias PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE entradas(
id int(255) AUTO_INCREMENT NOT NULL,
usuarios_id int(255) NOT NULL,
categorias_id int(255) NOT NULL,
titulo varchar(100) NOT NULL,
descripcion MEDIUMTEXT NULL,
fecha DATE NOT NULL,
CONSTRAINT pk_entradas PRIMARY KEY (id),
CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuarios_id) REFERENCES usuarios(id),
CONSTRAINT fk_entrada_categoria FOREIGN KEY(categorias_id) REFERENCES categorias(id)
)ENGINE=InnoDB;


