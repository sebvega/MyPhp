/*
sacar vendedores que tienen jefe y sacar el nombre del jefe

*/


SELECT v.id, v.grupos_id, ve.nombre AS 'jefe', v.nombre, v.apellidos, v.cargo, v.sueldo, v.comision 
	FROM vendedores v
	INNER JOIN vendedores ve ON v.jefe=ve.id 
	WHERE jefe IS NOT NULL;


