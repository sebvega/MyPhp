#consulta con condicion

SELECT * FROM usuarios WHERE email ='sanchez@gmail.com';
SELECT * FROM usuarios WHERE email !='sanchez@gmail.com';
SELECT * FROM usuarios WHERE email <'sanchez@gmail.com';
SELECT * FROM usuarios WHERE email >'sanchez@gmail.com';
SELECT * FROM usuarios WHERE email <='sanchez@gmail.com';
SELECT * FROM usuarios WHERE email >='sanchez@gmail.com';
SELECT * FROM usuarios WHERE email BETWEEN a and b;
SELECT * FROM usuarios WHERE email in'sanchez@gmail.com';
SELECT * FROM usuarios WHERE email isnull 'sanchez@gmail.com';
SELECT * FROM usuarios WHERE email is not null'sanchez@gmail.com';
SELECT * FROM usuarios WHERE email like'sanchez@gmail.com';
SELECT * FROM usuarios WHERE email not like'sanchez@gmail.com';


SELECT * FROM usuarios WHERE YEAR(fechaRegistro) = 2020;
SELECT * FROM usuarios WHERE YEAR(fechaRegistro) != 2020 OR ISNULL;

/*
#operadores logicos
o	!!
y  	&&
no  NOT
*/
/*
comodines

cualquier cantidad de caracteres:     %
un caracter desconocido:    _
*/

#3. si tiene a en apellido

SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password ='123456a';

#4. sacar todos los registros de la tabla usuario cuyo año sea par

SELECT * FROM usuarios WHERE (YEAR(fechaRegistro)%2=0);


#5. sacar todos lor registros de la tabla usuarios cuyo nombre tenga mas de 5 letras y que se hayan registrado
# antes del 2021, y mostrar el nombre en mayuscula	


SELECT UPPER(nombre) AS 'nombre', apellidos  FROM usuarios WHERE LENGTH(nombre)>5 AND YEAR(fechaRegistro)<2021;