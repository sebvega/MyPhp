/*
enlistar todos los encargos realizados con la marca del coche y el nombre del cliente

*/

SELECT e.id, co.marca, cl.nombre 
	FROM clientes cl, coches co,encargos e
	WHERE e.coches_id=co.id AND e.clientes_id=cl.id;



