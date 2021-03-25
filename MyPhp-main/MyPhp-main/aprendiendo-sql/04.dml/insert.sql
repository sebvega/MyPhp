#insertar registros nuevos


INSERT INTO usuarios VALUES(null, 'sebastian', 'sanchez', 'sanchez@gmail.com', '123456a', '2021-03-10');
INSERT INTO usuarios VALUES(null, 'antonio', 'martinez', 'martuchis@gmail.com', '123456a', '2020-03-10');
INSERT INTO usuarios VALUES(null, 'paco', 'paquito', 'papo@gmail.com', '123456a', '2022-10-10');

#insertar filas solo con ciertas columnas

INSERT INTO usuarios (email, password) VALUES('admin@gmail.com', 'admin');
