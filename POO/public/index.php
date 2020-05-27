<?php

require_once __DIR__.'/../vendor/autoload.php';
use Altamira\Controller\Kernel;
$K= new Kernel();



//Generamos nuevo objeto. 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>

<?php

    //Utilizamos una propiedad. 
    echo $usuario ->nombre;
    // echo $usuario->dni;
    //Utilizamos un metodo. 
    echo $usuario->mostrarNombre();
    echo $usuario->mostrarDni();
?>
    
</body>
</html>