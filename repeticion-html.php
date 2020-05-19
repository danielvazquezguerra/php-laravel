<?php

$menu = [

         [
             
        "titulo" => "hamburguesa",
        "comensales" => 23,
        "tipo de plato" => "segundo",
        "ingredientes" => ["carne" => "250grs", "pan" => "100grs", "queso cheddar" => "50grs"]

    ],

    [
        "titulo" => "hotdog",
        "comensales" => 65,
        "tipo de plato" => "segundo",
        "ingredientes" => ["salchicha" => "200grs", "pan" => "100grs", "maiz" => "50grs", "cilantro" => "100grs"]

    ],

    [   "titulo" => "tequeños",
        "comensales" => 89,
        "tipo de plato" => "primero",
        "ingredientes" => ["harina" => "200grs", "queso" => "100grs", "aceite" => "50grs"]

    ]

    ];

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="arrays.css">
    <title>Array de platos</title>
</head>
<body>

<?php
    foreach($menu as $platos) {
?>
    <div class="plato">
<?php
    foreach(array_slice($platos, 0, 3) as $key => $plato) {

        echo $key . ':' . ' ' . $plato . '<br>';

    }

?>

    <p>INGREDIENTES</p>

<?php

    foreach($platos as $key => $plato) {

        if($key === "ingredientes") {

            foreach( $plato as $fila => $pepe) {

                echo $fila . ' ' . $pepe;

?>
    <br>
<?php
            }

            
        }
    }
?>
    </div>
<?php

    }
?>

    <br>

</body>
</html>