/*
visualizar los cargos de los vendedores y el numero de vendedores que hay en cada cargo

*/

SELECT cargo , COUNT(id) FROM vendedores GROUP BY (cargo);


