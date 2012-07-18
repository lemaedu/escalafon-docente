--
-- PostgreSQL database dump
--

-- Dumped from database version 9.1.3
-- Dumped by pg_dump version 9.1.3
-- Started on 2012-07-18 00:21:04

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 184 (class 3079 OID 11639)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 1989 (class 0 OID 0)
-- Dependencies: 184
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

--
-- TOC entry 196 (class 1255 OID 25865)
-- Dependencies: 5 571
-- Name: sp_ingresaractividad(character varying, character varying); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION sp_ingresaractividad(character varying, character varying) RETURNS void
    LANGUAGE plpgsql
    AS $_$
BEGIN
INSERT INTO actividades(
            nombreactividad, descripcion)
    VALUES ($1,$2);
end;
 $_$;


ALTER FUNCTION public.sp_ingresaractividad(character varying, character varying) OWNER TO postgres;

--
-- TOC entry 197 (class 1255 OID 25864)
-- Dependencies: 571 5
-- Name: sp_ingresarascenso(character varying, character varying); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION sp_ingresarascenso(character varying, character varying) RETURNS void
    LANGUAGE plpgsql
    AS $_$
BEGIN
INSERT INTO ascenso(
            nivel, estado)
    VALUES ($1, $2);
end;
 $_$;


ALTER FUNCTION public.sp_ingresarascenso(character varying, character varying) OWNER TO postgres;

--
-- TOC entry 201 (class 1255 OID 25842)
-- Dependencies: 571 5
-- Name: sp_ingresarcapacitacion(character varying, character varying, integer, character varying); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION sp_ingresarcapacitacion(character varying, character varying, integer, character varying) RETURNS void
    LANGUAGE plpgsql
    AS $_$
BEGIN
INSERT INTO capacitacion(
            institucioncap,temacapacitacion,puntos, descripcion)
    VALUES ($1, $2, $3,$4);
end;
 $_$;


ALTER FUNCTION public.sp_ingresarcapacitacion(character varying, character varying, integer, character varying) OWNER TO postgres;

--
-- TOC entry 199 (class 1255 OID 25885)
-- Dependencies: 5 571
-- Name: sp_ingresardignidad(integer, double precision, character varying); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION sp_ingresardignidad(integer, double precision, character varying) RETURNS void
    LANGUAGE plpgsql
    AS $_$
BEGIN
INSERT INTO dignidades(
            duracionanio, puntaje, descripcion)
    VALUES ($1,$2,$3);
end;
 $_$;


ALTER FUNCTION public.sp_ingresardignidad(integer, double precision, character varying) OWNER TO postgres;

--
-- TOC entry 200 (class 1255 OID 25840)
-- Dependencies: 5 571
-- Name: sp_ingresardocente(character varying, character varying, character varying, date, character, character varying, character varying, character varying, character varying, date, character varying); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION sp_ingresardocente(character varying, character varying, character varying, date, character, character varying, character varying, character varying, character varying, date, character varying) RETURNS void
    LANGUAGE plpgsql
    AS $_$
BEGIN
INSERT INTO docente(
            cedula, nombres, apellidos, fechanacimiento, sexo, nacionalidad, 
            telefono, categoriadocente, direccion, fechaingreso, foto)
    VALUES ($1, $2, $3, $4, $5, $6, $7, 
            $8, $9, $10, $11);
end;
 $_$;


ALTER FUNCTION public.sp_ingresardocente(character varying, character varying, character varying, date, character, character varying, character varying, character varying, character varying, date, character varying) OWNER TO postgres;

--
-- TOC entry 202 (class 1255 OID 25861)
-- Dependencies: 571 5
-- Name: sp_ingresarformacion(character varying, character varying, character varying, double precision, date, character varying); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION sp_ingresarformacion(character varying, character varying, character varying, double precision, date, character varying) RETURNS void
    LANGUAGE plpgsql
    AS $_$
BEGIN
INSERT INTO formacion(
            niveleducacion, codigorefrendacion, numpaginaregistro, 
            puntos, fecharegistro, descripcion)
    VALUES ($1,$2,$3, $4,$5,$6);
end;
 $_$;


ALTER FUNCTION public.sp_ingresarformacion(character varying, character varying, character varying, double precision, date, character varying) OWNER TO postgres;

--
-- TOC entry 198 (class 1255 OID 25866)
-- Dependencies: 5 571
-- Name: sp_ingresarpublicacion(character varying, character varying, character varying, integer, double precision, character varying); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION sp_ingresarpublicacion(character varying, character varying, character varying, integer, double precision, character varying) RETURNS void
    LANGUAGE plpgsql
    AS $_$
BEGIN
INSERT INTO publicaciones(
            area, tipo_publicacion, editorial, numeropublicacion, 
            puntajeanio, descripcion)
    VALUES ($1, $2, $3, $4,$5,$6);
end;
 $_$;


ALTER FUNCTION public.sp_ingresarpublicacion(character varying, character varying, character varying, integer, double precision, character varying) OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 182 (class 1259 OID 25768)
-- Dependencies: 5
-- Name: accion; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE accion (
    codigoaccion character varying(4) NOT NULL,
    descripcion character varying(25)
);


ALTER TABLE public.accion OWNER TO postgres;

--
-- TOC entry 183 (class 1259 OID 25773)
-- Dependencies: 5
-- Name: accion_usuarios; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE accion_usuarios (
    codigoaccion character varying(4) NOT NULL,
    login character varying(25) NOT NULL
);


ALTER TABLE public.accion_usuarios OWNER TO postgres;

--
-- TOC entry 163 (class 1259 OID 25609)
-- Dependencies: 5
-- Name: actividades; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE actividades (
    codigoactividad integer NOT NULL,
    nombreactividad character varying(50),
    descripcion character varying(250)
);


ALTER TABLE public.actividades OWNER TO postgres;

--
-- TOC entry 162 (class 1259 OID 25607)
-- Dependencies: 163 5
-- Name: actividades_codigoactividad_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE actividades_codigoactividad_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.actividades_codigoactividad_seq OWNER TO postgres;

--
-- TOC entry 1990 (class 0 OID 0)
-- Dependencies: 162
-- Name: actividades_codigoactividad_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE actividades_codigoactividad_seq OWNED BY actividades.codigoactividad;


--
-- TOC entry 166 (class 1259 OID 25632)
-- Dependencies: 5
-- Name: ascenso; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE ascenso (
    codigoascenso integer NOT NULL,
    nivel character varying(25),
    estado character varying(50)
);


ALTER TABLE public.ascenso OWNER TO postgres;

--
-- TOC entry 165 (class 1259 OID 25630)
-- Dependencies: 5 166
-- Name: ascenso_codigoascenso_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE ascenso_codigoascenso_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ascenso_codigoascenso_seq OWNER TO postgres;

--
-- TOC entry 1991 (class 0 OID 0)
-- Dependencies: 165
-- Name: ascenso_codigoascenso_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE ascenso_codigoascenso_seq OWNED BY ascenso.codigoascenso;


--
-- TOC entry 173 (class 1259 OID 25687)
-- Dependencies: 5
-- Name: capacitacion; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE capacitacion (
    codigocapacitacion integer NOT NULL,
    institucioncap character varying(50) NOT NULL,
    temacapacitacion character varying(100),
    puntos double precision,
    descripcion character varying(250)
);


ALTER TABLE public.capacitacion OWNER TO postgres;

--
-- TOC entry 172 (class 1259 OID 25685)
-- Dependencies: 173 5
-- Name: capacitacion_codigocapacitacion_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE capacitacion_codigocapacitacion_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.capacitacion_codigocapacitacion_seq OWNER TO postgres;

--
-- TOC entry 1992 (class 0 OID 0)
-- Dependencies: 172
-- Name: capacitacion_codigocapacitacion_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE capacitacion_codigocapacitacion_seq OWNED BY capacitacion.codigocapacitacion;


--
-- TOC entry 169 (class 1259 OID 25655)
-- Dependencies: 5
-- Name: dignidades; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE dignidades (
    codigodignidad integer NOT NULL,
    duracionanio integer,
    puntaje double precision,
    descripcion character varying
);


ALTER TABLE public.dignidades OWNER TO postgres;

--
-- TOC entry 168 (class 1259 OID 25653)
-- Dependencies: 169 5
-- Name: dignidades_codigodignidad_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE dignidades_codigodignidad_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.dignidades_codigodignidad_seq OWNER TO postgres;

--
-- TOC entry 1993 (class 0 OID 0)
-- Dependencies: 168
-- Name: dignidades_codigodignidad_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE dignidades_codigodignidad_seq OWNED BY dignidades.codigodignidad;


--
-- TOC entry 161 (class 1259 OID 25602)
-- Dependencies: 5
-- Name: docente; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE docente (
    cedula character varying(10) NOT NULL,
    nombres character varying(25),
    apellidos character varying(25),
    fechanacimiento date,
    sexo character(1),
    nacionalidad character varying(25),
    telefono character varying(9),
    categoriadocente character varying(25),
    direccion character varying(50),
    fechaingreso date,
    foto character varying(250)
);


ALTER TABLE public.docente OWNER TO postgres;

--
-- TOC entry 164 (class 1259 OID 25615)
-- Dependencies: 5
-- Name: docente_actividades; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE docente_actividades (
    cedula character varying(10) NOT NULL,
    codigoactividad integer NOT NULL,
    horas integer NOT NULL
);


ALTER TABLE public.docente_actividades OWNER TO postgres;

--
-- TOC entry 167 (class 1259 OID 25638)
-- Dependencies: 5
-- Name: docente_ascenso; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE docente_ascenso (
    codigoascenso integer NOT NULL,
    cedula character varying(10) NOT NULL,
    documentosvalidos integer,
    fechaascenso date,
    puntajetotal double precision
);


ALTER TABLE public.docente_ascenso OWNER TO postgres;

--
-- TOC entry 174 (class 1259 OID 25696)
-- Dependencies: 5
-- Name: docente_capacitacion; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE docente_capacitacion (
    codigocapacitacion integer NOT NULL,
    cedula character varying(10) NOT NULL,
    tipo character varying(20) NOT NULL,
    numerohoras integer NOT NULL,
    numerodias integer,
    fecha date
);


ALTER TABLE public.docente_capacitacion OWNER TO postgres;

--
-- TOC entry 171 (class 1259 OID 25666)
-- Dependencies: 5
-- Name: docente_dignidades; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE docente_dignidades (
    codigodignidad integer NOT NULL,
    cedula character varying(10) NOT NULL,
    fechanombramiento date,
    fechafin date,
    descripcion character varying
);


ALTER TABLE public.docente_dignidades OWNER TO postgres;

--
-- TOC entry 170 (class 1259 OID 25664)
-- Dependencies: 5 171
-- Name: docente_dignidades_codigodignidad_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE docente_dignidades_codigodignidad_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.docente_dignidades_codigodignidad_seq OWNER TO postgres;

--
-- TOC entry 1994 (class 0 OID 0)
-- Dependencies: 170
-- Name: docente_dignidades_codigodignidad_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE docente_dignidades_codigodignidad_seq OWNED BY docente_dignidades.codigodignidad;


--
-- TOC entry 180 (class 1259 OID 25748)
-- Dependencies: 5
-- Name: docente_formacion; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE docente_formacion (
    cedula character varying(10) NOT NULL,
    codigoformacion integer NOT NULL,
    fechaentrega date,
    descripcion character varying(50)
);


ALTER TABLE public.docente_formacion OWNER TO postgres;

--
-- TOC entry 179 (class 1259 OID 25739)
-- Dependencies: 5
-- Name: formacion; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE formacion (
    codigoformacion integer NOT NULL,
    niveleducacion character varying,
    codigorefrendacion character varying(50) NOT NULL,
    numpaginaregistro character varying(20),
    puntos double precision,
    fecharegistro date,
    descripcion character varying(250)
);


ALTER TABLE public.formacion OWNER TO postgres;

--
-- TOC entry 178 (class 1259 OID 25737)
-- Dependencies: 5 179
-- Name: formacion_codigoformacion_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE formacion_codigoformacion_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.formacion_codigoformacion_seq OWNER TO postgres;

--
-- TOC entry 1995 (class 0 OID 0)
-- Dependencies: 178
-- Name: formacion_codigoformacion_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE formacion_codigoformacion_seq OWNED BY formacion.codigoformacion;


--
-- TOC entry 176 (class 1259 OID 25713)
-- Dependencies: 5
-- Name: publicaciones; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE publicaciones (
    codigopublicacion integer NOT NULL,
    area character varying(50),
    tipo_publicacion character varying,
    editorial character varying(50),
    numeropublicacion integer,
    puntajeanio double precision,
    descripcion character varying(250)
);


ALTER TABLE public.publicaciones OWNER TO postgres;

--
-- TOC entry 175 (class 1259 OID 25711)
-- Dependencies: 176 5
-- Name: publicaciones_codigopublicacion_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE publicaciones_codigopublicacion_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.publicaciones_codigopublicacion_seq OWNER TO postgres;

--
-- TOC entry 1996 (class 0 OID 0)
-- Dependencies: 175
-- Name: publicaciones_codigopublicacion_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE publicaciones_codigopublicacion_seq OWNED BY publicaciones.codigopublicacion;


--
-- TOC entry 177 (class 1259 OID 25722)
-- Dependencies: 5
-- Name: publicaciones_docente; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE publicaciones_docente (
    codigopublicacion integer NOT NULL,
    cedula character varying(10) NOT NULL,
    fechapublicacion date NOT NULL,
    descripcion character varying(50)
);


ALTER TABLE public.publicaciones_docente OWNER TO postgres;

--
-- TOC entry 181 (class 1259 OID 25763)
-- Dependencies: 5
-- Name: usuarios; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE usuarios (
    login character varying(25) NOT NULL,
    clave character varying(25)
);


ALTER TABLE public.usuarios OWNER TO postgres;

--
-- TOC entry 1931 (class 2604 OID 25612)
-- Dependencies: 163 162 163
-- Name: codigoactividad; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY actividades ALTER COLUMN codigoactividad SET DEFAULT nextval('actividades_codigoactividad_seq'::regclass);


--
-- TOC entry 1932 (class 2604 OID 25635)
-- Dependencies: 166 165 166
-- Name: codigoascenso; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY ascenso ALTER COLUMN codigoascenso SET DEFAULT nextval('ascenso_codigoascenso_seq'::regclass);


--
-- TOC entry 1935 (class 2604 OID 25690)
-- Dependencies: 173 172 173
-- Name: codigocapacitacion; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY capacitacion ALTER COLUMN codigocapacitacion SET DEFAULT nextval('capacitacion_codigocapacitacion_seq'::regclass);


--
-- TOC entry 1933 (class 2604 OID 25658)
-- Dependencies: 168 169 169
-- Name: codigodignidad; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY dignidades ALTER COLUMN codigodignidad SET DEFAULT nextval('dignidades_codigodignidad_seq'::regclass);


--
-- TOC entry 1934 (class 2604 OID 25669)
-- Dependencies: 170 171 171
-- Name: codigodignidad; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY docente_dignidades ALTER COLUMN codigodignidad SET DEFAULT nextval('docente_dignidades_codigodignidad_seq'::regclass);


--
-- TOC entry 1937 (class 2604 OID 25742)
-- Dependencies: 179 178 179
-- Name: codigoformacion; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY formacion ALTER COLUMN codigoformacion SET DEFAULT nextval('formacion_codigoformacion_seq'::regclass);


--
-- TOC entry 1936 (class 2604 OID 25716)
-- Dependencies: 175 176 176
-- Name: codigopublicacion; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY publicaciones ALTER COLUMN codigopublicacion SET DEFAULT nextval('publicaciones_codigopublicacion_seq'::regclass);


--
-- TOC entry 1967 (class 2606 OID 25772)
-- Dependencies: 182 182
-- Name: pk_accion; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY accion
    ADD CONSTRAINT pk_accion PRIMARY KEY (codigoaccion);


--
-- TOC entry 1969 (class 2606 OID 25777)
-- Dependencies: 183 183 183
-- Name: pk_accionusuario; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY accion_usuarios
    ADD CONSTRAINT pk_accionusuario PRIMARY KEY (codigoaccion, login);


--
-- TOC entry 1941 (class 2606 OID 25614)
-- Dependencies: 163 163
-- Name: pk_actividades; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY actividades
    ADD CONSTRAINT pk_actividades PRIMARY KEY (codigoactividad);


--
-- TOC entry 1945 (class 2606 OID 25637)
-- Dependencies: 166 166
-- Name: pk_ascenso; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY ascenso
    ADD CONSTRAINT pk_ascenso PRIMARY KEY (codigoascenso);


--
-- TOC entry 1953 (class 2606 OID 25695)
-- Dependencies: 173 173
-- Name: pk_capacitacion; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY capacitacion
    ADD CONSTRAINT pk_capacitacion PRIMARY KEY (codigocapacitacion);


--
-- TOC entry 1949 (class 2606 OID 25663)
-- Dependencies: 169 169
-- Name: pk_dignidades; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY dignidades
    ADD CONSTRAINT pk_dignidades PRIMARY KEY (codigodignidad);


--
-- TOC entry 1939 (class 2606 OID 25606)
-- Dependencies: 161 161
-- Name: pk_docente; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY docente
    ADD CONSTRAINT pk_docente PRIMARY KEY (cedula);


--
-- TOC entry 1943 (class 2606 OID 25619)
-- Dependencies: 164 164 164
-- Name: pk_docenteactividades; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY docente_actividades
    ADD CONSTRAINT pk_docenteactividades PRIMARY KEY (cedula, codigoactividad);


--
-- TOC entry 1947 (class 2606 OID 25642)
-- Dependencies: 167 167 167
-- Name: pk_docenteasenco; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY docente_ascenso
    ADD CONSTRAINT pk_docenteasenco PRIMARY KEY (cedula, codigoascenso);


--
-- TOC entry 1955 (class 2606 OID 25700)
-- Dependencies: 174 174 174
-- Name: pk_docentecapacitacion; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY docente_capacitacion
    ADD CONSTRAINT pk_docentecapacitacion PRIMARY KEY (codigocapacitacion, cedula);


--
-- TOC entry 1951 (class 2606 OID 25674)
-- Dependencies: 171 171 171
-- Name: pk_docentedignidades; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY docente_dignidades
    ADD CONSTRAINT pk_docentedignidades PRIMARY KEY (codigodignidad, cedula);


--
-- TOC entry 1963 (class 2606 OID 25752)
-- Dependencies: 180 180 180
-- Name: pk_docenteformacion; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY docente_formacion
    ADD CONSTRAINT pk_docenteformacion PRIMARY KEY (codigoformacion, cedula);


--
-- TOC entry 1959 (class 2606 OID 25726)
-- Dependencies: 177 177 177
-- Name: pk_docentepublicacion; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY publicaciones_docente
    ADD CONSTRAINT pk_docentepublicacion PRIMARY KEY (codigopublicacion, cedula);


--
-- TOC entry 1961 (class 2606 OID 25747)
-- Dependencies: 179 179
-- Name: pk_formacion; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY formacion
    ADD CONSTRAINT pk_formacion PRIMARY KEY (codigoformacion);


--
-- TOC entry 1957 (class 2606 OID 25721)
-- Dependencies: 176 176
-- Name: pk_publicaciones; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY publicaciones
    ADD CONSTRAINT pk_publicaciones PRIMARY KEY (codigopublicacion);


--
-- TOC entry 1965 (class 2606 OID 25767)
-- Dependencies: 181 181
-- Name: pk_usuarios; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT pk_usuarios PRIMARY KEY (login);


--
-- TOC entry 1970 (class 2606 OID 25620)
-- Dependencies: 1938 161 164
-- Name: fk_docactividades1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY docente_actividades
    ADD CONSTRAINT fk_docactividades1 FOREIGN KEY (cedula) REFERENCES docente(cedula);


--
-- TOC entry 1971 (class 2606 OID 25625)
-- Dependencies: 163 1940 164
-- Name: fk_docactividades2; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY docente_actividades
    ADD CONSTRAINT fk_docactividades2 FOREIGN KEY (codigoactividad) REFERENCES actividades(codigoactividad);


--
-- TOC entry 1972 (class 2606 OID 25643)
-- Dependencies: 1944 167 166
-- Name: fk_docasenso1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY docente_ascenso
    ADD CONSTRAINT fk_docasenso1 FOREIGN KEY (codigoascenso) REFERENCES ascenso(codigoascenso);


--
-- TOC entry 1973 (class 2606 OID 25648)
-- Dependencies: 1938 167 161
-- Name: fk_docasenso2; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY docente_ascenso
    ADD CONSTRAINT fk_docasenso2 FOREIGN KEY (cedula) REFERENCES docente(cedula);


--
-- TOC entry 1976 (class 2606 OID 25701)
-- Dependencies: 1952 173 174
-- Name: fk_docentecapacitacion1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY docente_capacitacion
    ADD CONSTRAINT fk_docentecapacitacion1 FOREIGN KEY (codigocapacitacion) REFERENCES capacitacion(codigocapacitacion);


--
-- TOC entry 1977 (class 2606 OID 25706)
-- Dependencies: 1938 174 161
-- Name: fk_docentecapacitacion2; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY docente_capacitacion
    ADD CONSTRAINT fk_docentecapacitacion2 FOREIGN KEY (cedula) REFERENCES docente(cedula);


--
-- TOC entry 1974 (class 2606 OID 25675)
-- Dependencies: 1948 171 169
-- Name: fk_docentedignidades1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY docente_dignidades
    ADD CONSTRAINT fk_docentedignidades1 FOREIGN KEY (codigodignidad) REFERENCES dignidades(codigodignidad);


--
-- TOC entry 1975 (class 2606 OID 25680)
-- Dependencies: 161 1938 171
-- Name: fk_docentedignidades2; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY docente_dignidades
    ADD CONSTRAINT fk_docentedignidades2 FOREIGN KEY (cedula) REFERENCES docente(cedula);


--
-- TOC entry 1980 (class 2606 OID 25753)
-- Dependencies: 1938 161 180
-- Name: fk_docformacion1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY docente_formacion
    ADD CONSTRAINT fk_docformacion1 FOREIGN KEY (cedula) REFERENCES docente(cedula);


--
-- TOC entry 1981 (class 2606 OID 25758)
-- Dependencies: 180 1960 179
-- Name: fk_docformacion2; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY docente_formacion
    ADD CONSTRAINT fk_docformacion2 FOREIGN KEY (codigoformacion) REFERENCES formacion(codigoformacion);


--
-- TOC entry 1978 (class 2606 OID 25727)
-- Dependencies: 176 1956 177
-- Name: fk_docpublicacion1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY publicaciones_docente
    ADD CONSTRAINT fk_docpublicacion1 FOREIGN KEY (codigopublicacion) REFERENCES publicaciones(codigopublicacion);


--
-- TOC entry 1979 (class 2606 OID 25732)
-- Dependencies: 161 177 1938
-- Name: fk_docpublicacion2; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY publicaciones_docente
    ADD CONSTRAINT fk_docpublicacion2 FOREIGN KEY (cedula) REFERENCES docente(cedula);


--
-- TOC entry 1982 (class 2606 OID 25778)
-- Dependencies: 182 1966 183
-- Name: fk_permisousuario1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY accion_usuarios
    ADD CONSTRAINT fk_permisousuario1 FOREIGN KEY (codigoaccion) REFERENCES accion(codigoaccion);


--
-- TOC entry 1983 (class 2606 OID 25783)
-- Dependencies: 183 181 1964
-- Name: fk_permisousuario2; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY accion_usuarios
    ADD CONSTRAINT fk_permisousuario2 FOREIGN KEY (login) REFERENCES usuarios(login);


--
-- TOC entry 1988 (class 0 OID 0)
-- Dependencies: 5
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2012-07-18 00:21:05

--
-- PostgreSQL database dump complete
--

