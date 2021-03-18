/*
conseguir la masa salarial del concesionario (aunal)

*/


SELECT SUM(sueldo), grupos_id FROM vendedores GROUP BY grupos_id;