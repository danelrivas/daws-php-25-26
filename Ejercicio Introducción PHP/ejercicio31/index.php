<?php
    function generarArray(){
        $cantidad = 0;
        $numeros = array();
        do {
            array_push($numeros, random_int(1, 999));
            $cantidad += 1;
        } while ($cantidad < 20);

        $valorMin = 1000;
        $valorMax = 0;
        foreach($numeros as $value){
            if ($value < $valorMin){
                $valorMin = $value;
            }
            if ($value > $valorMax){
                $valorMax = $value;
            }
        }
        echo "El array: " . var_export($numeros) . "<br>";
        echo "El valor máximo es: " . $valorMax . "<br>";
        echo "El valor mínimo es: " . $valorMin . "<br>";
    }

    include 'index.view.php'
?>