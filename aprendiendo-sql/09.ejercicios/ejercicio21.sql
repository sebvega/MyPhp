/*
obtener los nombres y ciudades de los clientes con encargos de 3 unidades o mas

*/

SELECT nombre, ciudad FROM clientes WHERE id IN 
	(SELECT clientes_id FROM encargos WHERE cantidad >= 3);




