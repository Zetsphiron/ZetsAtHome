--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.10
-- Dumped by pg_dump version 9.6.10

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: _table1; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public.table1 (
    column1 smallint,
    column2 character varying(9) DEFAULT NULL::character varying,
    column3 character varying(10) DEFAULT NULL::character varying,
    column4 character varying(11) DEFAULT NULL::character varying,
    column5 numeric(8,5) DEFAULT NULL::numeric
);


ALTER TABLE public.table1 OWNER TO wjddecddubhnnb;

--
-- Name: _users; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public.users (
    numero_de_empleado smallint,
    nombre character varying(16) DEFAULT NULL::character varying,
    apellido1 character varying(9) DEFAULT NULL::character varying,
    apellido2 character varying(8) DEFAULT NULL::character varying,
    celular bigint,
    curp character varying(18) DEFAULT NULL::character varying,
    rfc character varying(13) DEFAULT NULL::character varying,
    nss character varying(11) DEFAULT NULL::character varying,
    correo character varying(26) DEFAULT NULL::character varying,
    direccion character varying(64) DEFAULT NULL::character varying,
    pass character varying(32) DEFAULT NULL::character varying
);


ALTER TABLE public.users OWNER TO wjddecddubhnnb;

--
-- Data for Name: table1; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public.table1 (column1, column2, column3, column4, column5) FROM stdin;
1	texto	2021-09-01	202020.0	2.33232
2	alo	2021-09-02	4.5445555E7	45.44540
3	fgfgfgfgk	2021-09-07	2456789.0	87.23400
4	sadfdff	2021-09-09	765448.0	47.27360
5	Hello.	2021-09-04	2.3238554E7	83.23880
1975	Humberto	1976-06-23	254.0	213.52000
\.


--
-- Data for Name: _users; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public.users (numero_de_empleado, nombre, apellido1, apellido2, celular, curp, rfc, nss, correo, direccion, pass) FROM stdin;
1	ALFONSO	RAMOS	MARTINEZ	6621231916	RAMA631128HVZMRL05	RAMA6311284Q9	268-48-2909	wlegros@green.info	Lomas De Los Astros 106-B	827ccb0eea8a706c4c34a16891f84e7b
2	JOSE ALFREDO	RAMIREZ	MARTINEZ	6143495337	RAMA631217HPLMRL05	RAMA631217EQ4	519-47-3241	shana86@yahoo.com	VERMONT NO. 2211, FRAC LAS AGUILAS, 31100	827ccb0eea8a706c4c34a16891f84e7b
3	MARIA DE JESUS	RAZO	MARTINEZ	6571841618	RAMJ641012MGTZRS06	RAMJ641012NI6	387-52-6226	mosciski.lizeth@gmail.com	HIDALGO 100, TEPATITLAN DE MORELOS CENTRO, 47600	827ccb0eea8a706c4c34a16891f84e7b
4	AIDA GUADALUPE	GIORGANA	HIDALGO	6571851367	GIHA621212MTCRDD03	GIHA621212G67	035-07-2481	warren.ullrich@hotmail.com	CARRETERA PRESA LA AMISTAD 160 S/N, CIUDAD ACUÃ‘A CENTRO	827ccb0eea8a706c4c34a16891f84e7b
5	REGINO	CARRILLO	VICENCIO	6571059559	CAVR540908HVZRCG07	CAVR540908II5	400-09-0514	jettie26@bartoletti.com	CANALES 1001 6, POPULAR, 874100	827ccb0eea8a706c4c34a16891f84e7b
6	RIGOBERTO	SANCHEZ	ALONSO	6571424237	SAAR560913HOCNLG04	SAAR560913BP8	504-01-3160	cole.deja@parisian.biz	FELIX U GOMEZ 1406 NTE, TERMINAL, 645118	827ccb0eea8a706c4c34a16891f84e7b
7	ROSA ELIA	SANTILLAN	ALMANZA	6571889290	SAAR570720MTSNLS04	SAAR570720PW4	541-05-1612	trey80@yahoo.com	MORELOS NO. 800, CENTRO, 68000	827ccb0eea8a706c4c34a16891f84e7b
8	RAYMUNDO	SANTIAGO	AGUSTIN	6571470552	SAAR571005HOCNGY03	SAAR571005CY1	050-48-7675	denesik.tomasa@gmail.com	RAFAEL M HIDALGO PTE NO. 200 S/N, FRANCISCO MURGUIA, 50161	827ccb0eea8a706c4c34a16891f84e7b
9	MODESTA SUSANA	CERVANTES	LOPEZ	6571850495	CELM650413MDFRPD00	CELM650413MX1	248-94-1662	arely.kilback@bode.com	GUERRERO 1011 A, CENTRO, 88000	827ccb0eea8a706c4c34a16891f84e7b
10	MIGUEL	JAIMES	NAJERA	6571763556	JANM821217HDFMJG04	JANM821217PM9	401-38-6618	cronin.erik@gmail.com	EJE CENTRAL ESQ CALLE 13 SN, PROGRESO NACIONAL	827ccb0eea8a706c4c34a16891f84e7b
11	FERNANDO	AZUARA	MOLAR	6571578402	AUMF821206HVZZLR06	AUMF821206I42	521-15-1053	bogan.arjun@osinski.com	PUERTA DEL SOL NO. 108 NO. 7, COLINA DE SAN JERONIMO, 64666	827ccb0eea8a706c4c34a16891f84e7b
12	MA DEL CARMEN	FLORES	ROJAS	6571251042	FORC620215MGTLJR07	FORM620215K41	005-22-0543	dmarquardt@hane.info	Calle Cuarenta Y Dos 1274-A	827ccb0eea8a706c4c34a16891f84e7b
13	CORNELIO DELFINO	FLORES	ROSAS	6571413704	FORC620916HPLLSR05	FORC620916B7A	486-36-9237	mafalda.batz@funk.biz	VICENTE LOMBARDO TOLEDANO NO. 250, SANTA MARIA TOTOLTEPEC, 50200	827ccb0eea8a706c4c34a16891f84e7b
14	RICARDO	FLORES	PULIDO	6571742737	FOPR640602HTLLLC02	FOPR640602TT1	005-54-3392	holden44@herman.com	45 PONIENTE 2459-A S/N, LIBERTAD, 72450	827ccb0eea8a706c4c34a16891f84e7b
15	RAMON	FLORES	PAZ	6571941831	FOPR650608HNTLZM00	FOPR650608T82	008-32-9513	xsmitham@cole.biz	PASEO DE LAS FRESAS NO. 721 NO. A, JARD DE IRAPUATO, 365135	827ccb0eea8a706c4c34a16891f84e7b
\.


--
-- PostgreSQL database dump complete
--

