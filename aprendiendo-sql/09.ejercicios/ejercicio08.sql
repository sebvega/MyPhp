/*
visualizar todos los coches en cuya marca exista la letra "A" y el modelo que empiecen por "F"
*/

SELECT * FROM coches WHERE modelo LIKE 'F%' AND( marca LIKE '%A%' OR marca LIKE '%a%' );





SELECT nombre, apellidos FROM usuarios WHERE id IN (SELECT usuarios_id FROM entradas WHERE titulo LIKE '%GTA%');