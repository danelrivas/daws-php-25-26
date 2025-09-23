<?php
    $paises = $_GET["num"];
    $suma = 0;
    
    function recibirNumeros($num, $suma){
        for($i = 0; $i <= $num; $i++){
            if ($i %2 == 0 ){
                //Sumar antes junto con la I
                if ($suma + $i > 100) {
                    break;
                } else {
                    //Buen uso para sumar
                    $suma += $i;
                }
            } else {
                continue;
            }
        }
        return $suma;
    }
    
    include 'index.view.php'
?>