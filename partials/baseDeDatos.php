<?php
$conexion= new mysqli("localhost","gerardo","1234");
$bd="CREATE DATABASE stampymail";
$conexion->query($bd);

require_once 'conection.php';

$tabla="CREATE TABLE users(
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    rol VARCHAR(100) NOT NULL
)";
$link->query($tabla);
