CREATE TABLE DOCENTE (
	Cedula varchar(10) NOT NULL,
	Nombres varchar(25),
	Apellidos varchar(25),
	FechaNacimiento date,
--	Edad int,
	Sexo char(1),
	Nacionalidad varchar(25),
	Telefono varchar(9),
	CategoriaDocente varchar(25),
	Direccion varchar(50),
	FechaIngreso date,
	Foto varchar(250),
  CONSTRAINT pk_Docente PRIMARY KEY(Cedula)
);

CREATE TABLE ACTIVIDADES (
	CodigoActividad serial,
	NombreActividad varchar(50),
  CONSTRAINT pk_Actividades PRIMARY KEY(CodigoActividad)
);

CREATE TABLE DOCENTE_ACTIVIDADES (
	Cedula varchar(10) NOT NULL,
	CodigoActividad int,
	Horas int NOT NULL,
  CONSTRAINT pk_DocenteActividades PRIMARY KEY(Cedula,CodigoActividad),
  CONSTRAINT fk_DocActividades1 FOREIGN KEY (Cedula) REFERENCES DOCENTE(Cedula),
  CONSTRAINT fk_DocActividades2 FOREIGN KEY (CodigoActividad) REFERENCES ACTIVIDADES(CodigoActividad)
);

--DROP TABLE IF EXISTS ASCENSO CASCADE;

CREATE TABLE ASCENSO (
	CodigoAscenso serial,        
	Nivel varchar(25),
	Estado varchar(50),
  CONSTRAINT pk_Ascenso PRIMARY KEY(CodigoAscenso)
);

--DROP TABLE IF EXISTS DOCENTE_ASCENSO CASCADE;

CREATE TABLE DOCENTE_ASCENSO (
	CodigoAscenso int,
	Cedula varchar(10) NOT NULL,
        DocumentosValidos int,--Esto es Codigo de Capacitacion
	FechaAscenso date,
	PuntajeTotal float,
  CONSTRAINT pk_DocenteAsenco PRIMARY KEY(Cedula,CodigoAscenso),
  CONSTRAINT fk_DocAsenso1 FOREIGN KEY (CodigoAscenso) REFERENCES ASCENSO(CodigoAscenso),
  CONSTRAINT fk_DocAsenso2 FOREIGN KEY (Cedula) REFERENCES DOCENTE(Cedula)
);

--DROP TABLE IF EXISTS DIGNIDADES_DESEMPENIADAS CASCADE;

CREATE TABLE DIGNIDADES (
	CodigoDignidad serial,
	DuracionAnio int,
        Puntaje float,
	Descripcion varchar,	
  CONSTRAINT pk_Dignidades PRIMARY KEY(CodigoDignidad)
);

--DROP TABLE IF EXISTS DOCENTE_DIGNIDADES CASCADE;

CREATE TABLE DOCENTE_DIGNIDADES (
	CodigoDignidad serial,
	Cedula varchar(10) NOT NULL,
	FechaNombramiento date,--Fecha Inicio
        FechaFin Date,
        Descripcion varchar,
  CONSTRAINT pk_DocenteDignidades PRIMARY KEY(CodigoDignidad,Cedula),
  CONSTRAINT fk_DocenteDignidades1 FOREIGN KEY (CodigoDignidad) REFERENCES DIGNIDADES(CodigoDignidad),
  CONSTRAINT fk_DocenteDignidades2 FOREIGN KEY (Cedula) REFERENCES DOCENTE(Cedula)
);

--DROP TABLE IF EXISTS CAPACITACION CASCADE;

CREATE TABLE CAPACITACION (
	CodigoCapacitacion serial,
        InstitucionCap varchar(50) not null,
        temaCapacitacion varchar,
	Puntos float,
	Descripcion varchar,
  CONSTRAINT pk_Capacitacion PRIMARY KEY(CodigoCapacitacion)
);

--DROP TABLE IF EXISTS DOCENTE_CAPACITACION CASCADE;

CREATE TABLE DOCENTE_CAPACITACION (
	CodigoCapacitacion int,
	Cedula varchar(10) NOT NULL,
        Tipo varchar(20) not null,--Asistido, Aprobado, Participado
	NumeroHoras int NOT NULL,
	NumeroDias int,
        fecha   date,
  CONSTRAINT pk_DocenteCapacitacion PRIMARY KEY(CodigoCapacitacion,Cedula),
  CONSTRAINT fk_DocenteCapacitacion1 FOREIGN KEY (CodigoCapacitacion) REFERENCES CAPACITACION(CodigoCapacitacion),
  CONSTRAINT fk_DocenteCapacitacion2 FOREIGN KEY (Cedula) REFERENCES DOCENTE(Cedula)
);

--DROP TABLE IF EXISTS PUBLICACIONES CASCADE;

CREATE TABLE PUBLICACIONES (
	CodigoPublicacion serial,
        Area varchar(30),--Ejemplo Matematicas	
	Tipo_Publicacion varchar,--Ejemplo Revista Libro, solucionario
        editorial varchar(50),
	NumeroPublicacion int,
	PuntajeAnio float,
        Descripcion varchar,
  CONSTRAINT pk_Publicaciones PRIMARY KEY(CodigoPublicacion)
);

--DROP TABLE IF EXISTS PUBLICACIONES_DOCENTE CASCADE;
CREATE TABLE PUBLICACIONES_DOCENTE (
	CodigoPublicacion int,
	Cedula varchar(10) NOT NULL,
	FechaPublicacion date NOT NULL,        
        Descripcion varchar(50),
  CONSTRAINT pk_DocentePublicacion PRIMARY KEY(CodigoPublicacion,Cedula),
  CONSTRAINT fk_DocPublicacion1 FOREIGN KEY (CodigoPublicacion) REFERENCES PUBLICACIONES(CodigoPublicacion),
  CONSTRAINT fk_DocPublicacion2 FOREIGN KEY (Cedula) REFERENCES DOCENTE(Cedula)
);

--DROP TABLE IF EXISTS FORMACION CASCADE;

CREATE TABLE FORMACION (
	CodigoFormacion serial,
	NivelEducacion varchar,
        CodigoRefrendacion varchar(50) not null,
        NumPaginaRegistro varchar(20),
        Puntos float,
	FechaRegistro date,--gistro de Titulo
	Descripcion varchar(50),	
  CONSTRAINT pk_Formacion PRIMARY KEY(CodigoFormacion)
);

--DROP TABLE IF EXISTS DOCENTE_FORMACION CASCADE;

CREATE TABLE DOCENTE_FORMACION (
	Cedula varchar(10) NOT NULL,
	CodigoFormacion int,
	FechaEntrega date,--Entrega Documentos Espoch
        Descripcion varchar(50),
  CONSTRAINT pk_DocenteFormacion PRIMARY KEY(CodigoFormacion,Cedula),
  CONSTRAINT fk_DocFormacion1 FOREIGN KEY (Cedula) REFERENCES DOCENTE(Cedula),
  CONSTRAINT fk_DocFormacion2 FOREIGN KEY (CodigoFormacion) REFERENCES FORMACION(CodigoFormacion)
);

--DROP TABLE IF EXISTS USUARIOS CASCADE;

CREATE TABLE USUARIOS (
	Login varchar(25) NOT NULL,
	Clave varchar(25),
  CONSTRAINT pk_Usuarios PRIMARY KEY(Login)
);

--DROP TABLE IF EXISTS ACCION CASCADE;

CREATE TABLE ACCION (
	CodigoAccion varchar(4) NOT NULL,
	Descripcion varchar(25),
  CONSTRAINT pk_Accion PRIMARY KEY(CodigoAccion)
);

--DROP TABLE IF EXISTS ACCION_USUARIOS CASCADE;

CREATE TABLE ACCION_USUARIOS (
	CodigoAccion varchar(4) NOT NULL,
	Login varchar(25) NOT NULL,
  CONSTRAINT pk_AccionUsuario PRIMARY KEY(CodigoAccion,Login),
  CONSTRAINT fk_PermisoUsuario1 FOREIGN KEY (CodigoAccion) REFERENCES ACCION(CodigoAccion),
  CONSTRAINT fk_PermisoUsuario2 FOREIGN KEY (Login) REFERENCES USUARIOS(Login)
);