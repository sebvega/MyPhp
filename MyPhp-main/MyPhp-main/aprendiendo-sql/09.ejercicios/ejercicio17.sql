/*
obtener un listado con los encargos realizados por el cliente fruteria antonia 

*/

SELECT e.id,cl.nombre,co.modelo,e.cantidad, e.fecha FROM encargos e
	iNNER JOIN coches co ON e.coches_id=co.id
	iNNER JOIN clientes cl ON cl.id=e.clientes_id
	WHERE clientes_id IN 
	(SELECT id FROM clientes WHERE nombre='Fruteria Antonia');




SELECT * FROM encargos
	WHERE clientes_id IN 
	(SELECT id FROM clientes WHERE nombre='Fruteria Antonia');




