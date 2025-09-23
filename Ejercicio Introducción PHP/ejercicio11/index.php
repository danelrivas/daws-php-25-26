<?php
    $texto1 = "Danel";
    $texto2 = $_GET["texto2"];

    function concatenar($texto1, $texto2){
        return $texto1 . " " . $texto2;
    }

    $concatenado = concatenar($texto1, $texto2);

    include 'index.view.php';
?>