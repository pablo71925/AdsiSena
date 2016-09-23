# Insertar de forma corta
INSERT INTO clientes VALUES (75000011, 'Federico Ramos', 8830011, 'Bogota DC', 'Cra 220-130');

# Insertar de forma larga
INSERT INTO clientes (documento, nombres, telefono, ciudad, direccion)
VALUES ( 75000012, 'Hermeregilda Blanco', 8830012, 'Bogota DC', 'Cra 208-88');


INSERT INTO compras VALUES ( DEFAULT, '2016-05-16', 75000004, 75000 );
INSERT INTO compras VALUES ( DEFAULT, '2016-05-16', 75000007, 200000 );

INSERT INTO detalles VALUES ( DEFAULT, 'Alicate', 1, 25000, 1 );
INSERT INTO detalles VALUES ( DEFAULT, 'Destornillador', 2, 30000, 1 );
INSERT INTO detalles VALUES ( DEFAULT, 'Clavos', 20, 20000, 1 );

INSERT INTO detalles VALUES ( DEFAULT, 'Pala', 1, 100000, 2 );
INSERT INTO detalles VALUES ( DEFAULT, 'Carretilla', 1, 100000, 2 );
