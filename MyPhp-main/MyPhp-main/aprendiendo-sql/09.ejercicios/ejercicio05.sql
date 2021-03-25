/*
mostrar nombre del vendedor y los dias que ha estado en el concesionario

*/

SELECT nombre, DATEDIFF( CURDATE(), fecha_inicio) AS 'tiempo en el concesionario' FROM vendedores;

SELECT email, DATEDIFF( fechaRegistro, CURDATE()) AS 'fecha actual' FROM usuarios;