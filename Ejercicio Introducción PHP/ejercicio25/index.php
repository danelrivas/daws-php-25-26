<?php
$estudiantes = ['Ane', 'Markel', 'Nora', 'Danel', 'Amaia', 'Izaro'];

$lista = "<ul>";
$cantidadEstudiantes = count($estudiantes);

$i = 0;
while($i < $cantidadEstudiantes){
    $lista .= "<li>" . $estudiantes[$i] . "</li>";
    $i += 1;
}

$lista .= "</ul>";

include 'index.view.php'
?>