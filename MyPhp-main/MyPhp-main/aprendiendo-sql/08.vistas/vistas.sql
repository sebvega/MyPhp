/*
vistas:
se pueden definir como una consulta almacenada en la DB que se utiliza como una tabla virtual
y no almacena datos sino que usa asociaciones y los datos de las tablas originales 
de forma siempre se mantiene actualizada

*/




CREATE VIEW entradas_nombre AS 
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria' 
	FROM entradas e 
	INNER JOIN usuarios u ON e.usuarios_id=u.id
	INNER JOIN categorias c ON e.categorias_id=c.id;

# eliminar tabla temporal "vista"


DROP VIEW entradas_nombre;