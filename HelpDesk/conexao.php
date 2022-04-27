<?php
$host = 'localhost';
$usuario = 'root';
$senha = '123';
$database = 'dbprojeto';


$mysqli = new mysqli($host, $usuario, $senha, $database);
if($mysqli -> error) {
    die("Falha ao conectar" . $mysqli->error);
}
