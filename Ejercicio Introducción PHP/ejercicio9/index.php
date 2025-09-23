<?php
    $texto1 = $_GET["texto1"];
    $texto2 = $_GET["texto2"];

    function concatenar($texto1, $texto2){
        return $texto1 . " " . $texto2;
    }

    echo "Texto concatenado: " . concatenar($texto1, $texto2);
?>