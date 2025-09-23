<?php
    $num = $_GET["num"];
    $suma = 0;
    
    function recibirNumeros($num, $suma){
        for($i = 0; $i <= $num; $i++){
            if ($i %2 == 0){
                $suma = $suma + $i;
            } else {
                continue;
            }
        }
        return $suma;
    }

    //DIVIDIR en 2 funciones (Comprobar par / Sumar)
    
    include 'index.view.php'
?>