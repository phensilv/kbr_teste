<?php

$usuario = 'root';
$senha = '';
$database = 'kbr_login';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar: " . $mysqli->error);
}