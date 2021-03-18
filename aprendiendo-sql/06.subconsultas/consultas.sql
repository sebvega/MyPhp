#subconsultas

/*
-son consultas que se ejecutan dentro de otras
-consisten en utilizar los resultados de la subconsulta para operar en la consulta principal
-jugando con las claves foraneas

*/



#sacar usuarios con entradas
SELECT * FROM usuarios WHERE id IN (SELECT usuarios_id FROM entradas);
SELECT * FROM usuarios WHERE id NOT IN (SELECT usuarios_id FROM entradas);

#sacar los usuarios que tenganalguna entrada que hablen de GTA

SELECT nombre, apellidos FROM usuarios WHERE id IN (SELECT usuarios_id FROM entradas WHERE titulo LIKE '%GTA%');

#sacar todas las entradas de la categoria accion utilizando su nombre

SELECT *  FROM entradas WHERE categorias_id IN (SELECT id FROM categorias WHERE nombre ='Accion');

#mostrar las categorias con mas de 3 entradas

SELECT *  FROM categorias WHERE id IN (SELECT categorias_id FROM entradas GROUP BY categorias_id HAVING COUNT(categorias_id)>3);

#mostrar los usuarios que crearon una entrada un martes

SELECT * FROM usuarios WHERE id IN (SELECT usuarios_id FROM entradas WHERE DAYOFWEEK(fecha)=4);

#mostrar el nombre del usuario que tenga mas entradas

SELECT nombre FROM usuarios WHERE id = (SELECT usuarios_id FROM entradas GROUP BY usuarios_id ORDER BY COUNT(usuarios_id) DESC LIMIT 1);

#mostrar las categorias sin entradas

SELECT * FROM categorias WHERE id NOT IN (SELECT categorias_id FROM entradas);