# renombrar tabla

ALTER TABLE clientes RENAME TO usuarios_renom;

# cambiar nombre de columna

ALTER TABLE usuarios_renom CHANGE apellidos apellido VARCHAR(100) null;

# modificar columna sin cambiar nombre

ALTER TABLE usuarios_renom MODIFY apellido CHAR(50) not null;

# añadir columna

ALTER TABLE usuarios_renom ADD website varchar(100) null;

#añadir restriccion a columba

ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(telefono);

#borrar una columna

ALTER TABLE usuarios_renom DROP website;