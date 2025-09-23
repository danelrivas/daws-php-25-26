<?php
$grupos = array ('Melendi', 'Maluma', 'Eladio', 'Feid', 'Drake');
$cantidadGrupos = count($grupos);

function imprimirGrupos($grupos, $cantidadGrupos){
    for($i = 0; $i < $cantidadGrupos; $i++){
        echo "Grupo: " . $grupos[$i] . "<br>";
    }
}

include 'index.view.php'
?>