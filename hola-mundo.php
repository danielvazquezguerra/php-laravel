<?php

$hola = 'hola-mundo';

$edad = 45.7;

var_dump($edad);
$nombre = 'Daniel';

$verbo = 'camina';

$frase = "$nombre $verbo por la vereda";

$num1 = 23;
$num2 = 56;

if ($num1 > $num2) {

    $resultado = $num1;
}else{
    $resultado = $num2;
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

<?php

echo $hola;
echo $edad;
echo $frase;
echo $resultado;
?>
    
</body>
</html>