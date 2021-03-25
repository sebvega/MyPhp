/*
visualizar los dos clientes con el mayor numero de pedidos y la cantidad de pedidos

*/

SELECT cl.nombre, COUNT(co.id) FROM encargos e
	INNER JOIN clientes cl ON cl.id=e.clientes_id
	INNER JOIN coches co ON co.id=e.coches_id
	GROUP BY e.clientes_id, e.coches_id ORDER BY 2 DESC LIMIT 2;


SELECT e.cantidad, co.modelo, cl.nombre, SUM(cantidad) AS 'total de unidades' FROM encargos e
	INNER JOIN clientes cl ON cl.id=e.clientes_id
	INNER JOIN coches co ON co.id=e.coches_id
	GROUP BY e.clientes_id, e.coches_id;