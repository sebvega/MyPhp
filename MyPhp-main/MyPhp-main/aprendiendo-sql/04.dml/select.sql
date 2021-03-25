# mostrar todos los registros de una tabla

SELECT email, nombre, apellidos FROM usuarios;
SELECT * FROM usuarios;

#operadores

SELECT email, (7+7)AS 'operacion' FROM usuarios ORDER BY id;#ASC o DESC

SELECT email, (id+7)AS 'operacion' FROM usuarios ORDER BY id ASC;


#funciones matematicas#
SELECT ABS(7+7)AS 'operacion' FROM usuarios ORDER BY id;
SELECT CEIL(7.12)AS 'operacion' FROM usuarios ORDER BY id;

#funciones en texto

SELECT UPPER(nombre) FROM usuarios;
SELECT LOWER(nombre) FROM usuarios;
SELECT CONCAT(nombre,' ',apellidos) FROM usuarios;
SELECT CONCAT(nombre,' ',apellidos) AS 'CONVERSION' FROM usuarios;
SELECT UPPER(CONCAT(nombre,' ',apellidos)) AS 'CONVERSION' FROM usuarios;
SELECT email, LENGTH(UPPER(CONCAT(nombre,' ',apellidos))) AS 'CONVERSION' FROM usuarios;

SELECT TRIM(CONCAT('     ',nombre,'      ',apellidos,'      ')) AS 'CONVERSION' FROM usuarios;

#funciones para fechas


SELECT email, fechaRegistro FROM usuarios;
SELECT email, fechaRegistro, CURDATE() AS 'fecha actual' FROM usuarios;
SELECT email, DATEDIFF( fechaRegistro, CURDATE()) AS 'fecha actual' FROM usuarios;
SELECT email, DAYNAME(fechaRegistro) FROM usuarios;
SELECT email, DAYOFMONTH(fechaRegistro) FROM usuarios;
SELECT email, DAYOFWEEK(fechaRegistro) FROM usuarios;
SELECT email, DAYOFYEAR(fechaRegistro) FROM usuarios;
SELECT email, MONTH(fechaRegistro) FROM usuarios;
SELECT email, HOUR(fechaRegistro) FROM usuarios;



SELECT email, CURTIME() AS 'fecha actual' FROM usuarios;
SELECT email, SYSDATE() AS 'fecha actual' FROM usuarios;
SELECT email, SYSDATE() AS 'fecha actual' FROM usuarios;

SELECT email, DATE_FORMAT(fechaRegistro, '%d-%m-%Y') FROM usuarios;

SELECT email, ISNULL(apellidos) FROM usuarios;
SELECT email, STRCMP('hola','hola') FROM usuarios;
SELECT email, STRCMP('hola','ho1a') FROM usuarios;

SELECT VERSION() FROM usuarios;
SELECT USER() FROM usuarios;
SELECT DISTINCT USER() FROM usuarios;

SELECT DATABASE FROM usuarios;
SELECT IFNULL(apellidos,'este campo esta vacio') FROM usuarios;


