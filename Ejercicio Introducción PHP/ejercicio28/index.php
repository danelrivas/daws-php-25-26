<?php
$grupos = array ('Melendi', 'Maluma', 'Eladio', 'Feid', 'Drake');

function imprimirGrupos($grupos){
    foreach ($grupos as $value){
        echo "Grupo: " . $value . "<br>";
    };
}

include 'index.view.php'
?>