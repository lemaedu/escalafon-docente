CREATE TABLE DOCENTE (
	Cedula varchar(10) NOT NULL,
	Nombres varchar(25),
	Apellidos varchar(25),
	FechaNacimiento date,
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
	Cedula varchar(10),
	Horas int NOT NULL,
	NombreActividad varchar(50),
 CONSTRAINT pk_Actividades PRIMARY KEY(CodigoActividad),
 CONSTRAINT fk_Actividades FOREIGN KEY (Cedula) REFERENCES DOCENTE(Cedula)
);

CREATE TABLE ASCENSO (
	CodigoAscenso serial,
        Cedula varchar(10) NOT NULL,     
	Nivel varchar(25),
	Estado varchar(50),	
        DocumentosValidos int,--Esto es Codigo de Capacitacion
	FechaAscenso date,
	PuntajeTotal float,
  CONSTRAINT pk_Asenco PRIMARY KEY(CodigoAscenso),
  CONSTRAINT fk_DocAsenso FOREIGN KEY (Cedula) REFERENCES DOCENTE(Cedula)
);

CREATE TABLE DIGNIDADES (
	CodigoDignidad serial,
	DuracionAnio int,
        Puntaje float,
	Descripcion varchar,	
  CONSTRAINT pk_Dignidades PRIMARY KEY(CodigoDignidad)
);

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

CREATE TABLE CAPACITACION (
	CodigoCapacitacion serial,
        Cedula varchar(10) NOT NULL,	
        InstitucionCap varchar(50) not null,
        temaCapacitacion varchar,	
        Tipo varchar(20) not null,--Asistido, Aprobado, Participado
	NumeroHoras int NOT NULL,
	NumeroDias int,
        Puntos float,
        fecha   date,
	Descripcion varchar,
  CONSTRAINT pk_Capacitacion PRIMARY KEY(CodigoCapacitacion),
  CONSTRAINT fk_Capacitacion2 FOREIGN KEY (Cedula) REFERENCES DOCENTE(Cedula)
);

CREATE TABLE PUBLICACIONES (
	CodigoPublicacion serial,
        Cedula varchar(10) NOT NULL,	
        Area varchar(30),--Ejemplo Matematicas	
	Tipo_Publicacion varchar,--Ejemplo Revista Libro, solucionario
        editorial varchar(50),
	NumeroPublicacion int,
	PuntajeAnio float,
	FechaPublicacion date NOT NULL,        
        Descripcion varchar(50),
  CONSTRAINT pk_Publicacion PRIMARY KEY(CodigoPublicacion), 
  CONSTRAINT fk_Publicacion FOREIGN KEY (Cedula) REFERENCES DOCENTE(Cedula)
);

CREATE TABLE FORMACION (        
	CodigoFormacion serial,
        Cedula varchar(10) NOT NULL,
	NivelEducacion varchar,
        CodigoRefrendacion varchar(50) not null,
        NumPaginaRegistro varchar(20),
        Puntos float,
	FechaRegistro date,--gistro de Titulo	
	FechaEntrega date,--Entrega Documentos Espoch
        Descripcion varchar(50),
  CONSTRAINT pk_Formacion PRIMARY KEY(CodigoFormacion),
  CONSTRAINT fk_Formacion FOREIGN KEY (Cedula) REFERENCES DOCENTE(Cedula)
);


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