# Modificar el campo ciudad
UPDATE clientes SET ciudad = 'Manizales' WHERE documento = 75000001;

# Modificar varios campos
UPDATE clientes SET nombres = 'Mariana Baranga', telefono = 8300099, ciudad = 'Cali', direccion = 'Calle 999' WHERE documento = 75000009;