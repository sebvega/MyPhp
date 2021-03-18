/*
mostrar todos los vendedores tengan o no clientes y mostrar el numero de clientes

*/

SELECT CONCAT(v.nombre,' ',v.apellidos) 'vendedor', COUNT(cl.vendedor_id) 'numero de ventas'
	FROM vendedores v
	LEFT JOIN clientes cl ON v.id=cl.vendedor_id
	GROUP BY v.id;




