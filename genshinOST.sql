--
-- PostgreSQL database dump
--

-- Dumped from database version 13.2
-- Dumped by pg_dump version 13.2

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: playlist; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.playlist (
    id integer NOT NULL,
    cover character varying(100) NOT NULL,
    judul character varying(50) NOT NULL,
    album character varying(75) NOT NULL,
    artist character varying(50) NOT NULL
);


ALTER TABLE public.playlist OWNER TO postgres;

--
-- Name: playlist_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.playlist_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.playlist_id_seq OWNER TO postgres;

--
-- Name: playlist_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.playlist_id_seq OWNED BY public.playlist.id;


--
-- Name: playlist id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.playlist ALTER COLUMN id SET DEFAULT nextval('public.playlist_id_seq'::regclass);


--
-- Data for Name: playlist; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.playlist (id, cover, judul, album, artist) FROM stdin;
12	cover/cover5.png	Fragile Fantasy	Vortex of Legends	Hoyo-Mix, Yupeng-Chen
14	cover/cover3.png	Above the Sea of Clouds	Jade Moon Upon a Sea of Clouds	Hoyo-Mix, Yupeng-Chen
13	cover/cover4.png	Rex Incognito	The Stellar Moments	Hoyo-Mix
16	cover/cover2.png	Twilight Serenity	City of Winds and Idylls	Yupeng-Chen
17	cover/cover1.png	Genshin Impact Main Theme	The Wind and The Star Traveler	Hoyo-Lab
\.


--
-- Name: playlist_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.playlist_id_seq', 17, true);


--
-- Name: playlist playlist_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.playlist
    ADD CONSTRAINT playlist_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

