/*
consulta multitabla
son consultas que sirven para consultar varias tablas en una sola sentencia
*/

#mostrar las entradas con el nombre del autor y el nombre de la categoria

SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria' 
	FROM entradas e, usuarios u, categorias c
	WHERE e.usuarios_id=u.id AND e.categorias_id=c.id ORDER BY e.id ASC;


#mostrar el nombre de las categorias y al lado cuantas entradas tienen

SELECT c.nombre AS 'categoria', COUNT(e.id) AS 'cantidad de entradas'
	FROM entradas e , categorias c
	WHERE e.categorias_id = c.id GROUP BY e.categorias_id;


#mostrarel email de los usuarios y al lado cuantas entradas tienen

SELECT u.email, COUNT(e.id)
	FROM usuarios u, entradas e
	WHERE u.id=e.usuarios_id; GROUP BY e.usuarios_id;
 

	SELECT u.email, COUNT(titulo)
	FROM usuarios u, entradas e
	WHERE u.id=e.usuarios_id GROUP BY e.usuarios_id;



#INNER JOIN
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria' 
	FROM entradas e 
	INNER JOIN usuarios u ON e.usuarios_id=u.id
	INNER JOIN categorias c ON e.categorias_id=c.id;


	LEFT JOIN
	RIGHT JOIN