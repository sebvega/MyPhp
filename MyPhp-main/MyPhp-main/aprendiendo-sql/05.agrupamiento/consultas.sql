#consultas de agrupamiento


SELECT COUNT(titulo) AS 'numero de entradas', categorias_id FROM entradas GROUP BY categorias_id;


#consulta  de agrupamiento con condicion

SELECT COUNT(titulo) AS 'numero de entradas', categorias_id FROM entradas GROUP BY categorias_id HAVING COUNT(titulo)>=3;

/*
AVG		sacar la media
COUNT   contar rl numero de elementos
MAX		valor maximo del grupo
MIN		valor minimo del grupo
SUM		sumar todo el contenido del grupo
*/

SELECT AVG(id) AS 'media de entradas' FROM entradas;
SELECT MAX(id) AS 'maximo id', titulo FROM entradas;
SELECT MIN(id) AS 'minimo de entradas' FROM entradas;