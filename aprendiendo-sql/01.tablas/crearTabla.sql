/*
crear una tabla
tipos de datos

int(n° de caracteres) 					tipo entero
integer(n° de caracteres) 				tipo entero (maximo 255 caracteres)
varchar (n° de caracteres) 				tipo string o alfanumerico
char (n° de caracteres) 				tipo string o alfanumerico
float (n° de cifras, n° de decimales)	tipo flotante
date, time, timestamp 

TEXT 		(almacena 65.535 caracteres)
MEDIUMTEX 	(almacena 16 millomes de caracteres)
LONGTEX 	(almacena al rededor 4 Billones de caracteres)
*/


CREATE TABLE usuarios( 
`id` int(12) NOT NULL AUTO_INCREMENT,
`nombre` varchar(100),
`apellidos` varchar(100),
`email` varchar(200),
`password` varchar(255)
);

CREATE TABLE usuarios( 
id INT(12) ,
nombre VARCHAR(100),
apellidos VARCHAR(100),
email VARCHAR(200),
password VARCHAR(255)
);

CREATE TABLE t1 (a INTEGER,b CHAR(10));


CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
  `nombre` varchar(50) NOT NULL COMMENT 'nombre cliente',
  `apellidos` varchar(100) NOT NULL COMMENT 'Apellidos cliente',
  `telefono` int(9) NOT NULL COMMENT 'móvil',
  `codigo_postal` int(5) DEFAULT NULL,
  `edad` int(3) DEFAULT NULL,
  `sexo` char(1) NOT NULL,
  `profesion` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `telefono` (`telefono`),
  KEY `nombre` (`nombre`),
  FULLTEXT KEY `apellidos` (`apellidos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabla de clientes';






CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
  `nombre` varchar(50) NOT NULL COMMENT 'nombre cliente',
  `apellidos` varchar(100) NOT NULL COMMENT 'Apellidos cliente',
  `telefono` int(9) NOT NULL COMMENT 'móvil',
  `codigo_postal` int(5) DEFAULT NULL,
  `edad` int(3) DEFAULT NULL,
  `sexo` char(1) NOT NULL,
  `profesion` text NOT NULL,
 
  CONSTRAINT pk_usuarios PRIMARY KEY (`id`),
 
  UNIQUE KEY `telefono` (`telefono`),
  KEY `nombre` (`nombre`),
  FULLTEXT KEY `apellidos` (`apellidos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabla de clientes';