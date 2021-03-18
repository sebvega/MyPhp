/*
visualizar las unidades totales vendidas de cada coche a cada cliente mostrando el nombre del producto
el numero del cliente y la suma de unidades

*/

SELECT e.cantidad, co.modelo, cl.nombre, SUM(cantidad) AS 'total de unidades' FROM encargos e
	INNER JOIN clientes cl ON cl.id=e.clientes_id
	INNER JOIN coches co ON co.id=e.coches_id
	GROUP BY e.clientes_id, e.coches_id;



SELECT ROUND(AVG(v.sueldo),2), g.nombre, g.ciudad FROM vendedores v 
	INNER JOIN grupos g ON g.id=v.grupos_id
	GROUP BY grupos_id;