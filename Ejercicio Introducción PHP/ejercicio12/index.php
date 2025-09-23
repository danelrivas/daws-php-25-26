<?php
    $ciudades = ["Paris", "Berlin", "Amsterdam", "Praga"];

    $posicion = $_GET["posicion"];
    function getValor($ciudades, $posicion){
        return $ciudades[$posicion];
    }

    $ciudadGet = getValor($ciudades, $posicion);



    $posicion2 = $_GET["posicion2"];
    $valor = $_GET["valor"];
    function setValor($ciudades, $posicion2, $valor){
        $ciudades[$posicion2] = $valor;
        return $ciudades;
    }

    $ciudadesNew = setValor($ciudades, $posicion2, $valor);

    include 'index.view.php';
?>  