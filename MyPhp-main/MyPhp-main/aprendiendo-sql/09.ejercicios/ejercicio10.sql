/*
visualizar los apellidos de los vendedores, su fecha de entrada y numero de grupo ordenado por
fecha desendente y mostrar solo los 4 ultimos

*/

SELECT apellidos, fecha_inicio grupos_id FROM vendedores ORDER BY fecha_inicio DESC LIMIT 4;