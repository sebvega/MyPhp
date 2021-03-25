#diseñar y crear DB de un concesionario de vehiculos

CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;

CREATE TABLE coches(
id int(255) AUTO_INCREMENT NOT NULL,
modelo varchar(100) NOT NULL,
marca varchar(50) NOT NULL,
precio int(20) NOT NULL,
stock int(255) NOT NULL,
CONSTRAINT pk_coches PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE grupos(
id int(255) AUTO_INCREMENT NOT NULL,
nombre varchar(100) NOT NULL,
ciudad varchar(100) NOT NULL,
CONSTRAINT pk_grupos PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE vendedores(
id int(255) AUTO_INCREMENT NOT NULL,
grupos_id int(255) NOT NULL,
jefe int(150),
nombre varchar(100) NOT NULL,
apellidos varchar(100) NOT NULL,
cargo varchar(50) NOT NULL,
fecha_inicio DATE NOT NULL,
sueldo float(20,2) NOT NULL,
comision float(10,2) NOT NULL,
CONSTRAINT pk_vendedores PRIMARY KEY (id),
CONSTRAINT fk_vendedores_grupo FOREIGN KEY(grupos_id) REFERENCES grupos(id),
CONSTRAINT fk_vendedores_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE clientes(
id int(255) AUTO_INCREMENT NOT NULL,
vendedor_id int(255) NOT NULL,
nombre varchar(100) NOT NULL,
ciudad varchar(50) NOT NULL,
fecha DATE NOT NULL,
gastado int(25),
CONSTRAINT pk_clientes PRIMARY KEY (id),
CONSTRAINT fk_clientes_vendedores FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE encargos(
id int(255) AUTO_INCREMENT NOT NULL,
clientes_id int(255) NOT NULL,
coches_id int(255) NOT NULL,
cantidad int(255),
fecha DATE NOT NULL,
CONSTRAINT pk_encargos PRIMARY KEY (id),
CONSTRAINT fk_encargos_clientes FOREIGN KEY(clientes_id) REFERENCES clientes(id),
CONSTRAINT fk_encargos_coches FOREIGN KEY(coches_id) REFERENCES coches(id)
)ENGINE=InnoDB;




#vamos a rellenar las tablas con informacion

#coches
INSERT  INTO  coches VALUES(NULL, 'Renault Clio', 'Renault', 12000,13);
INSERT  INTO  coches VALUES(NULL, 'Seat Panda', 'Seat', 10000,10);
INSERT  INTO  coches VALUES(NULL, 'Mercedes Ranchera', 'Mercedes Benz', 32000,24);
INSERT  INTO  coches VALUES(NULL, 'Porche Cayene', 'Porche', 65000,5);
INSERT  INTO  coches VALUES(NULL, 'Lambo Aventador', 'Lamborgini', 170000,2);
INSERT  INTO  coches VALUES(NULL, 'Ferrari Spider', 'Ferrari', 245000,80);

#grupos
INSERT  INTO  grupos VALUES(NULL, 'Vendedores A', 'Madrid');
INSERT  INTO  grupos VALUES(NULL, 'Vendedores B', 'Madrid');
INSERT  INTO  grupos VALUES(NULL, 'Mecanicos', 'Madrid');
INSERT  INTO  grupos VALUES(NULL, 'Vendedores A', 'Barcelona');
INSERT  INTO  grupos VALUES(NULL, 'Vendedores B', 'Barcelona');
INSERT  INTO  grupos VALUES(NULL, 'Vendedores C', 'Valencia');
INSERT  INTO  grupos VALUES(NULL, 'Vendedores A', 'Bilbao');
INSERT  INTO  grupos VALUES(NULL, 'Vendedores B', 'Pamplona');
INSERT  INTO  grupos VALUES(NULL, 'Vendedores C', 'Santiago de compostera');

#vendedores
INSERT  INTO  vendedores VALUES(NULL, 1,NULL,'David','Lopez','Responsable de tienda',CURDATE(),30000,4);
INSERT  INTO  vendedores VALUES(NULL, 1,1,'Fran','Martinez','Ayudante de tienda',CURDATE(),23000,2);
INSERT  INTO  vendedores VALUES(NULL, 2,NULL,'Nelson','Sanchez','Responsable de tienda',CURDATE(),38000,5);
INSERT  INTO  vendedores VALUES(NULL, 2,3,'Jesus','Lopez','Ayudante de tienda',CURDATE(),12000,6);
INSERT  INTO  vendedores VALUES(NULL, 3,NULL,'Victor','Lopez','Mecanico jefe',CURDATE(),50000,2);
INSERT  INTO  vendedores VALUES(NULL, 4,NULL,'Antonio','Lopez','Vendedor de recambios',CURDATE(),13000,8);
INSERT  INTO  vendedores VALUES(NULL, 5,NULL,'Salvador','Lopez','Vendedor experto',CURDATE(),60000,2);
INSERT  INTO  vendedores VALUES(NULL, 6,NULL,'Joaquin','Lopez','Ejecutivo de cuentas',CURDATE(),80000,1);
INSERT  INTO  vendedores VALUES(NULL, 6,8,'Luis','Lopez','Ayudante de tienda',CURDATE(),10000,10);

#clientes
INSERT  INTO  clientes VALUES(NULL,1, 'Construcciones Diaz Inc', 'Alcobendas', CURDATE(),24000);
INSERT  INTO  clientes VALUES(NULL,1, 'Fruteria Antonia', 'Fuentelabrada', CURDATE(),40000);
INSERT  INTO  clientes VALUES(NULL,1, 'Imprenta Martinez Inc', 'Barcelona', CURDATE(),32000);
INSERT  INTO  clientes VALUES(NULL,1, 'Jesus Colchones Inc', 'El prat', CURDATE(),96000);
INSERT  INTO  clientes VALUES(NULL,1, 'Bar pepe Inc', 'Valencia', CURDATE(),170000);
INSERT  INTO  clientes VALUES(NULL,1, 'Tienda PC Inc', 'Murcia', CURDATE(),245000);

#encargos
INSERT  INTO  encargos VALUES(NULL,1, 1, 2, CURDATE());
INSERT  INTO  encargos VALUES(NULL,2, 2, 4, CURDATE());
INSERT  INTO  encargos VALUES(NULL,3, 3, 1, CURDATE());
INSERT  INTO  encargos VALUES(NULL,4, 3, 3, CURDATE());
INSERT  INTO  encargos VALUES(NULL,5, 5, 1, CURDATE());
INSERT  INTO  encargos VALUES(NULL,6, 6, 1, CURDATE());

