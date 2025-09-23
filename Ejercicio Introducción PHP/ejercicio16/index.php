<?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    function numeros($num1, $num2){
        if ($num1 != $num2) {
            $resultado = $num1 + $num2;
        } elseif ($num1 == $num2) {
            $resultado = $num1 * $num2;
        }
        return $resultado;
    }

    $resultadoFuncion = numeros($num1, $num2);

    include "index.view.php"; 
?>  