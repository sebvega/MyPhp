/*
sacar la media de sueldos entre todos los vendedores por grupo

*/
SELECT ROUND(AVG(v.sueldo),2), g.nombre, g.ciudad FROM vendedores v 
	INNER JOIN grupos g ON g.id=v.grupos_id
	GROUP BY grupos_id;

SELECT AVG(sueldo), grupos_id FROM vendedores GROUP BY grupos_id;