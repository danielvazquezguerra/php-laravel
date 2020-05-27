<?php

require_once '../controllers.php';
$conector = conexion($localhost, $root, $password, $database);
$platoObj = $conector->query("SELECT id,nombre,comensales FROM platos WHERE id=".$_GET["id"]);

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detalle</title>
    </head>
    <body>


<?php


    foreach($platoObj as $detail){
        var_dump($detail);
    }

?>


    
</body>
</html>