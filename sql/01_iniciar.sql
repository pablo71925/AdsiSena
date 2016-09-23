# Iniciar linea de comandos de Mysql:
# cd /Applications/MAMP/Library/bin/
# ./mysql -u root -p


# Mostrar Todas las Bases de Datos
show databases;

# Crear Base de Datos
create database adsi901197;

# Seleccionar Base de Datos
use adsi901197;

# Conectar Base de Datos
connect adsi901197;

# Mostrar Todas las Tablas
show tables;

# Crear Tabla
CREATE TABLE nclientes (
	documento bigint,
	nombres varchar(32),
	telefono int,
	ciudad varchar(16),
	direccion varchar(32),
	PRIMARY KEY(documento)
);

CREATE TABLE compras ( 
	id int auto_increment, 
	fecha date, 
	cliente_id bigint, 
	total int, 
	PRIMARY KEY(id), 
	FOREIGN KEY(cliente_id) REFERENCES clientes(documento)
);

CREATE TABLE detalles (
	id int auto_increment,
	articulo varchar(32),
	cantidad int(2),
	precio int,
	compra_id int,
	PRIMARY KEY(id),
	FOREIGN KEY(compra_id) REFERENCES compras(id)
);

# Mostrar la estructura de la tabla
describe clientes;

# Insertamos algunos registros
INSERT INTO clientes VALUES (75000001, 'Radamel Fransisco', 8830001, 'SantaMarta', 'Barrio la playita');
INSERT INTO clientes VALUES (75000002, 'Elvira Marleny', 8830002, 'Cali', 'Cra 22-23');
INSERT INTO clientes VALUES (75000003, 'Arnulfo Jose', 8830003, 'Pereira', 'Calle 21-28');
INSERT INTO clientes VALUES (75000004, 'Yolanda Flores', 8830004, 'Manizales', 'Calle 11-23');
INSERT INTO clientes VALUES (75000005, 'Arcadio Ramon', 8830005, 'Manizales', 'Calle 11-24');
INSERT INTO clientes VALUES (75000006, 'Marta Rios', 8830006, 'Manizales', 'Cra 11-12');
INSERT INTO clientes VALUES (75000007, 'Emanuel Veron', 8830007, 'Armenia', 'Cra 77-11');
INSERT INTO clientes VALUES (75000008, 'Clotilde Villa', 8830008, 'Pereira', 'Cra 88-99');
INSERT INTO clientes VALUES (75000009, 'Mario Baracunatana', 8830009, 'Armenia', 'Cra 122-33');
INSERT INTO clientes VALUES (75000010, 'Lucrecia Pantani', 8830010, 'Pereira', 'Calle 102-89');






