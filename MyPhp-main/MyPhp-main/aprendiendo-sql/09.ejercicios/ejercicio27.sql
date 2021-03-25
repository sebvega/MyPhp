/*
visualizar los nombres de los clientes y la cantidad de encargos realizados inluyendo los que 
no hallan realizado encargos

*/

SELECT cl.nombre, COUNT(e.id) FROM clientes cl
	LEFT JOIN encargos e ON cl.id=e.clientes_id
	GROUP BY 1;


