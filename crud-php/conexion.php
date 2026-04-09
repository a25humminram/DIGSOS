<?php

define('DB_HOST', 'dam.inspedralbes.cat');
define('DB_USER', 'a25humminram_apidaw'); 
define('DB_PASS', 'Fercito80'); 
define('DB_NAME', 'videojuegos');         

$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conexion) {
    die('Error de connexió: ' . mysqli_connect_error());
}

mysqli_set_charset($conexion, 'utf8');
