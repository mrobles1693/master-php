# Renombrar una Tabla#

ALTER TABLE usuarios RENAME TO usuarios_renom;

# Renombrar una Columana de la Tabla #

ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) null;

# Modificar Columna #

ALTER TABLE usuarios_renom MODIFY apellido varchar(50) not null;

# Añadir Columna #

ALTER TABLE usuarios_renom ADD website varchar(100) null;

# Añadir Restriccion a Columna #
# Con la restriccion UNIQUE(campo) indicas que los datos en ese campo no pueden duplicarse #
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

# Borrar columna #
ALTER TABLE usuarios_renom DROP website;