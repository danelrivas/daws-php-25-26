<?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    function esMayor($num1, $num2){
        return var_export($num1 > $num2);
    }

    echo "Es mayor? " . esMayor($num1, $num2);
?>