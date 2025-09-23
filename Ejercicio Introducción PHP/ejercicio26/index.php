<?php
$coches = ['Porsche', 'Audi', 'BMW', 'McLaren', 'Ferrari'];

$lista = "<ul>";
$cantidadCoches = count($coches);

$i = 0;
do {
    $lista .= "<li>" . $coches[$i] . "</li>";
    $i += 1;
} while($i < $cantidadCoches);

$lista .= "</ul>";

include 'index.view.php'
?>