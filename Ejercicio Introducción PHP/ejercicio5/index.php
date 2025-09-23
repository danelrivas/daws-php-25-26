<?php
    $a = $_GET["a"];
    $b = $_GET["b"];

    $resta = $a - $b;
    echo $resta;
    
    $division = $a / $b;
    echo $division;

    $mayor = $a > $b;
    var_export($mayor);

    $menorigual = $a <= $b;
    var_export($menorigual);
?>