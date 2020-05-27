<?php

require_once "controllers.php";
$conector = conexion($localhost, $root, $password, $database);
$platos = getPlatos($conector);
$tipoPlato = getTipoPlato($conector);



foreach($tipoPlato as $tipo) {
   
}

    foreach ( $platos as $plato) {
       
        ?>

        <div class="row">
            <div class="col s12 m6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                <span class="card-title"><?=$plato['nombre']?></span>
                <p><?=$plato['comensales']?></p>
                <p><?=(intval($plato['tipo_plato']))?></p>
                <p><?=var_dump($tipoPlato)?></p>
                </div>
                <div class="card-action">
                <a href="containers/detalle.php?id=<?=$plato["id"]?>">descripcion</a>
                <a href="containers/detalle.php?nombre=Paco">Prueba</a>
    
                </div>
            </div>
            </div>
        </div>

<?php
        }

?>