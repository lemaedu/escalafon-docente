create or replace function sp_docenteAvtividad(varchar)
returns record AS'
DECLARE algo RECORD;
BEGIN

SELECT into algo
  actividades.codigoactividad, 
  actividades.nombreactividad
FROM 
  public.docente, 
  public.actividades, 
  public.docente_actividades
WHERE 
  docente.cedula = docente_actividades.cedula AND
  actividades.codigoactividad = docente_actividades.codigoactividad AND
docente_actividades.cedula=$1;
return algo;
end;
 'LANGUAGE 'plpgsql';


--===========================================================================
create or replace function sp_docenteEscalafon(varchar)
returns record AS'
DECLARE nAscenso RECORD;
BEGIN

SELECT into nAscenso
  ascenso.codigoescalafon, 
  ascenso.nivel, 
  ascenso.estado
FROM 
  public.docente, 
  public.ascenso, 
  public.docente_ascenso
WHERE 
  docente.cedula = docente_ascenso.cedula AND
  ascenso.codigoescalafon = docente_ascenso.codigoescalafon and
docente.cedula=$1;
return nAscenso;
end;
 'LANGUAGE 'plpgsql';


--===============================IGRESAR DOCENTE------------------------------

CREATE OR REPLACE FUNCTION sp_ingresarDocente(varchar, varchar,varchar,date,
char,varchar,varchar,varchar,varchar,date,varchar)
returns void AS'
BEGIN
INSERT INTO docente(
            cedula, nombres, apellidos, fechanacimiento, sexo, nacionalidad, 
            telefono, categoriadocente, direccion, fechaingreso, foto)
    VALUES ($1, $2, $3, $4, $5, $6, $7, 
            $8, $9, $10, $11);
end;
 'LANGUAGE 'plpgsql';

--===============================MODIFICAR DOCENTE------------------------------
CREATE OR REPLACE FUNCTION sp_modificarDocente(varchar, varchar,varchar,date,
char,varchar,varchar,varchar,varchar,date,varchar)
returns void AS'
BEGIN
UPDATE docente
   SET cedula=$1, nombres=$2, apellidos=$3, fechanacimiento=$4, 
       sexo=$5, nacionalidad=$6, telefono=$7, categoriadocente=$8, direccion=$9, 
       fechaingreso=$10, foto=$11
 WHERE cedula=$1;
end;
 'LANGUAGE 'plpgsql';

--===============================ELIMINAR DOCENTE------------------------------

CREATE OR REPLACE FUNCTION sp_eliminarDocente(varchar)
returns void AS'
BEGIN
DELETE FROM docente
 WHERE cedula=$1;
end;
 'LANGUAGE 'plpgsql';

--=====================================================================
CREATE OR REPLACE FUNCTION sp_ingresarFormacion(varchar,varchar,varchar,float,date,varchar)
returns void AS'
BEGIN
INSERT INTO formacion(
            niveleducacion, codigorefrendacion, numpaginaregistro, 
            puntos, fecharegistro, descripcion)
    VALUES ($1,$2,$3, $4,$5,$6);
end;
 'LANGUAGE 'plpgsql';


--=====================================================================
CREATE OR REPLACE FUNCTION sp_eliminarFormacion(int)
returns void AS'
BEGIN
DELETE FROM formacion
 WHERE CodigoFormacion=$1;
end;
 'LANGUAGE 'plpgsql';


--=====================================================================
CREATE OR REPLACE FUNCTION sp_modificarFormacion(int,varchar,varchar,varchar,float,date,varchar)
returns void AS'
BEGIN
UPDATE formacion
   SET niveleducacion=$2, codigorefrendacion=$3, numpaginaregistro=$4, 
       puntos=$5, fecharegistro=$6, descripcion=$7
 WHERE CodigoFormacion=$1;

end;
 'LANGUAGE 'plpgsql';


--=====================================================================
CREATE OR REPLACE FUNCTION sp_ingresarFormacionDocente(varchar,int,date,varchar)
returns void AS'
BEGIN
INSERT INTO docente_formacion(
            cedula, codigoformacion, fechaentrega, descripcion)
    VALUES ($1, $2, $3, $4);
end;
 'LANGUAGE 'plpgsql';

--==================================================================
CREATE OR REPLACE FUNCTION sp_ingresarPublicacion(varchar,varchar,varchar,int,float,varchar)
returns void AS'
BEGIN
INSERT INTO publicaciones(
            area, tipo_publicacion, editorial, numeropublicacion, 
            puntajeanio, descripcion)
    VALUES ($1, $2, $3, $4,$5,$6);
end;
 'LANGUAGE 'plpgsql';

--==============================================================
CREATE OR REPLACE FUNCTION sp_eliminarPublicacion(int)
returns void AS'
BEGIN
DELETE FROM publicaciones
 WHERE codigopublicacion=$1;
end;
 'LANGUAGE 'plpgsql';

--=====================================================================
CREATE OR REPLACE FUNCTION sp_modificarPublicaciones(int,varchar,varchar,varchar,int,float)
returns void AS'
BEGIN
UPDATE publicaciones
   SET area=$2, tipo_publicacion=$3, editorial=$4, 
       numeropublicacion=$5, puntajeanio=$6, descripcion=$7
 WHERE codigopublicacion=$1;
end;
 'LANGUAGE 'plpgsql';

--=============================================================================
CREATE OR REPLACE FUNCTION sp_ingresarPublicacionDocente(int,varchar,date,varchar)
returns void AS'
BEGIN
INSERT INTO publicaciones_docente(
            codigopublicacion, cedula, fechapublicacion, descripcion)
    VALUES ($1, $2, $3, $4);
end;
 'LANGUAGE 'plpgsql';

--========================================

CREATE OR REPLACE FUNCTION sp_ingresarAscenso(varchar,date,varchar)
returns void AS'
BEGIN
INSERT INTO ascenso(
            nivel, estado)
    VALUES (?, ?, ?);

    VALUES ($1, $2, $3, $4);
end;
 'LANGUAGE 'plpgsql';




















--=============================================================================
CREATE OR REPLACE FUNCTION sp_ingresarAscenso(varchar,varchar,varchar)
returns void AS'
BEGIN
INSERT INTO ascenso(
            codigoescalafon, nivel, estado)
    VALUES ($1, $2, $3);
end;
 'LANGUAGE 'plpgsql';
--=============================================================================
CREATE OR REPLACE FUNCTION sp_ingresarCapacitacion(varchar,varchar,int)
returns void AS'
BEGIN
INSERT INTO capacitacion(
            codigocapacitacion, descripcion, puntos)
    VALUES ($1, $2, $3);
end;
 'LANGUAGE 'plpgsql';
--=================VISTAS PARA===========================================
--=======================================================================

--================== DOCENTE------------------------
create view v_Docente as
SELECT 
  cedula, 
  nombres, 
  apellidos, 
  nacionalidad, 
  telefono, 
  categoriadocente, 
  fechaingreso
FROM 
  docente;
--====================================================================
create view v_publicacionDocente as
SELECT 
nombres || ' ' || apellidos as Nombres, 
  publicaciones.descripcion, fechapublicacion, 
  publicaciones_docente.descripcion as DescripcionDocente
FROM docente, publicaciones,  publicaciones_docente
WHERE 
  docente.cedula = publicaciones_docente.cedula AND
  publicaciones.codigopublicacion = publicaciones_docente.codigopublicacion;

--==================================================================

create view v_DocenteCargos as
SELECT 
  nombres || ' ' || apellidos as Nombres, 
  cargos_desempeniados.descripcion, fecha, 
  docente_cargos.descripcion as DescripcionDocenteCargo
FROM docente, docente_cargos, cargos_desempeniados
WHERE 
  docente.cedula = docente_cargos.cedula AND
  cargos_desempeniados.codigocargo = docente_cargos.codigocargo;

--======================================================================
create view v_formacionDocente as
SELECT 
  nombres || ' ' || apellidos as Nombres,
  niveleducacion,  fechaentrega,
  docente_formacion.descripcion

FROM 
docente, formacion,docente_formacion
WHERE 
  docente.cedula = docente_formacion.cedula AND
  formacion.codigoformacion = docente_formacion.codigoformacion;

------------Une dos tablas en una sola Columna--------------------
--Select nombres || ' ' || apellidos as Nombres
--    From docente;
