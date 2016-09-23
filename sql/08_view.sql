# Crear vista
CREATE VIEW listanotas AS 
SELECT u.idu, u.nombres, n.idn, n.nt1, n.nt2, n.nt3, m.idm, m.nombre,  
ROUND(((n.nt1+n.nt2+n.nt3)/3),1) AS promedio 
FROM usuarios AS u, notas AS n, materias AS m 
WHERE u.idu = n.uid 
AND m.idm = n.mid
AND u.rol = 'Aprendiz'
AND u.estado = 'Activo';



# Consultar vista
SELECT * FROM listanotas;
SELECT nombres, nombre, promedio FROM listanotas;

