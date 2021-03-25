/*
mostrar los datos del vendedor con mas antiguedad en el consecionario

*/


SELECT * FROM vendedores ORDER BY fecha_inicio ASC LIMIT 1;

/*
obtener los datos de los coches con mas unidades vendidas

*/

SELECT * FROM coches WHERE id =
	(SELECT coches_id FROM encargos ORDER BY cantidad DESC LIMIT 1);



SELECT * FROM coches WHERE id IN
	(SELECT coches_id FROM encargos WHERE cantidad IN 
	(SELECT MAX(cantidad) FROM encargos));


