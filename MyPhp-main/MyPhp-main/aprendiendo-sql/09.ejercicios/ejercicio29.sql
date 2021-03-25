/*
crear una vista llamada vendedoresA que incluira todos los vendedores del grupo
que se llamen vendedoresA

*/

CREATE VIEW vendedoresA AS
SELECT * FROM vendedores WHERE grupos_id IN
(SELECT id FROM grupos WHERE nombre='vendedores A');


CREATE VIEW vendedoresA AS
SELECT v.id, v.grupos_id, v.jefe, v.nombre, v.apellidos, v.cargo, v.sueldo, v.comision FROM vendedores v
INNER JOIN grupos g ON g.id=v.grupos_id
WHERE g.nombre='Vendedores A';


DROP VIEW vendedoresA;


