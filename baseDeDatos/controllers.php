<?php

$localhost = "localhost";
$root = "root";
$database = "proyecto_ejemplo";


function conexion($localhost, $root = "root", $database = "proyecto_ejemplo") {
    $conector = new mysqli($localhost, $root, $database);
    return $conector;
};

function getPlatos($conector){
    $resultado = $conector->query("SELECT * FROM `platos`");
    return $resultado;

}









