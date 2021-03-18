/*
mostrar listado de clientes (numero del cliente y el nombre)
mostrar tamien el numero de vendedor y su nombre

*/

SELECT cl.id, cl.nombre AS 'cliente', v.id, v.nombre AS 'vendedor' 
	FROM clientes cl
	INNER JOIN vendedores v ON v.id=cl.vendedor_id;




SELECT cl.id, cl.nombre AS 'cliente', v.id, v.nombre AS 'vendedor' 
	FROM clientes cl, vendedores v
	WHERE cl.vendedor_id=v.id;


