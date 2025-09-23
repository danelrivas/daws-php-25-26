<?php
    $resultado = null;
    $temperatura = $_POST["temperatura"];
    //    $temperatura = isset($_POST["temperatura"]) ? $_POST["temperatura"] : "";
    $unidad = $_POST["unidad"];

    function calcularResultado($unidad, $temperatura) {
        if($unidad == "celsius"){
            return ($temperatura * 9/5) + 32;
        } else {
            return ($temperatura - 32) * 5/9;
        }
    }

    $resultado = calcularResultado($unidad, $temperatura);
    include 'index.view.php';
?>