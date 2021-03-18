/*
listar los encargos con el nombre del coche, el nombre del cliente y el nombre de la ciudad
pero unicamente cuando sean de madrid

*/

SELECT e.id, co.modelo, cl.nombre 
	FROM encargos e
	INNER JOIN coches co ON e.coches_id=co.id
	INNER JOIN clientes cl ON e.clientes_id=cl.id
	WHERE cl.ciudad='Barcelona';

