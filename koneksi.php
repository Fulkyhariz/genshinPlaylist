<?php

$host = "localhost";
$port = "5432";
$dbname = "fulky_kuis";
$user = "postgres";
$password = "";
$pg_options = "--client_encoding=UTF8";

$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} options='{$pg_options}'";
$koneksi = pg_connect($connection_string);

?>