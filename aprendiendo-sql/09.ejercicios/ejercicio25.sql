/*
obtener una lista de los nombres de los clientes con el importe de sus encargos acumulado

*/

SELECT cl.nombre, SUM(precio*cantidad)
	FROM clientes cl
	INNER JOIN encargos e ON cl.id=e.clientes_id
	INNER JOIN coches co ON co.id=e.id
	GROUP BY cl.nombre;



