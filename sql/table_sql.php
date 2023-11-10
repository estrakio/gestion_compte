<?php

$conn = pg_connect("host=db_compte dbname=gestionCompteDatabase user=adminCompte password=admin");


$sql="CREATE TABLE IF NOT EXISTS groupes(
   gro_pk_id INTEGER,
   gro_nom VARCHAR(50) ,
   PRIMARY KEY(gro_pk_id)
);";
pg_query($conn, $sql);

$sql="CREATE TABLE IF NOT EXISTS utilisateurs(
   uti_pk_id INTEGER,
   uti_nom VARCHAR(50) ,
   uti_mdp TEXT,
   PRIMARY KEY(uti_pk_id)
);";
pg_query($conn, $sql);

$sql="CREATE TABLE IF NOT EXISTS types(
   typ_pk_id INTEGER,
   typ_nom VARCHAR(50) ,
   PRIMARY KEY(typ_pk_id)
);";
pg_query($conn, $sql);

$sql="CREATE TABLE IF NOT EXISTS data(
   data_id INTEGER,
   data_valeur NUMERIC(15,2)  ,
   data_date DATE,
   data_nom VARCHAR(50) ,
   typ_pk_id INTEGER NOT NULL,
   gro_pk_id INTEGER NOT NULL,
   uti_pk_id INTEGER NOT NULL,
   PRIMARY KEY(data_id),
   FOREIGN KEY(typ_pk_id) REFERENCES types(typ_pk_id),
   FOREIGN KEY(gro_pk_id) REFERENCES groupes(gro_pk_id),
   FOREIGN KEY(uti_pk_id) REFERENCES utilisateurs(uti_pk_id)
);";
pg_query($conn, $sql);

$sql="CREATE TABLE IF NOT EXISTS somme_data(
   som_pk_id INTEGER,
   som_nom VARCHAR(50) ,
   som_valeur NUMERIC(15,2)  ,
   som_date INTEGER,
   typ_pk_id INTEGER NOT NULL,
   gro_pk_id INTEGER NOT NULL,
   PRIMARY KEY(som_pk_id),
   FOREIGN KEY(typ_pk_id) REFERENCES types(typ_pk_id),
   FOREIGN KEY(gro_pk_id) REFERENCES groupes(gro_pk_id)
);";
pg_query($conn, $sql);
