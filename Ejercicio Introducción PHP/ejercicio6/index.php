<?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];


   function multiplicar ($num1, $num2) {
    $resultado = $num1 * $num2;
    echo "El resultado es:  $resultado";
   } 

   multiplicar($num1, $num2);
?>