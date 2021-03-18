/*
listar los clientes que han hecho algun encargo del coche mercedez ranchera

*/

SELECT cl.* FROM clientes cl
	iNNER JOIN encargos e ON cl.id=e.clientes_id
	iNNER JOIN coches co ON co.id=e.coches_id
	WHERE co.modelo='Mercedes Ranchera';



SELECT e.clientes_id FROM encargos e
	iNNER JOIN clientes cl ON cl.id=e.clientes_id
	iNNER JOIN coches co ON co.id=e.coches_id
	WHERE co.modelo='Mercedes Ranchera';



