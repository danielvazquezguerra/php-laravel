<?php

$localhost = "localhost";
$root = "root";
$database = "proyecto_ejemplo";
$password = "";


function conexion($localhost, $root = "root", $password, $database = "proyecto_ejemplo") {
    $conector = new mysqli($localhost, $root,$password, $database);
    return $conector;
};

//get all platos. 
function getPlatos($conector){
    $resultado = $conector->query("SELECT * FROM `platos`");
    return $resultado;

}
//declaramos el resultado a $platos. 

function getTipoPlato($conector){
    $resultado = $conector->query("SELECT * FROM `tipo_de_plato`");
    return $resultado;
}

function getPlato($conector,$id){
    $resultPlato = $conector->query("SELECT * FROM platos WHERE id=$id");
    if($resultPlato ==false){
        header('Location: index.php?msg=noId');
    }
    $resultado=$resultPlato->fetch_assoc();
    return $resultado;
}















