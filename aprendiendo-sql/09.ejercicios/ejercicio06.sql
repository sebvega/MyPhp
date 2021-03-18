/*

visualizar el nombre y apellido de vendedores en una misma columna y su fecha de registro y el dia de la semana 
que se registraron

*/

SELECT CONCAT(nombre, ' ',apellidos) AS 'nombre completo', fecha_inicio, DAYNAME(fecha_inicio) FROM vendedores;

