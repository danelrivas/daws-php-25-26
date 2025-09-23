<?php
    $num = $_GET["num"];
    $suma = 0;
    
    function recibirNumeros($num, $suma){
        for($i = 0; $i <= $num; $i++){
            echo $i . "<br>";
            $suma = $suma + $i;
        }
        return $suma;
    }
    
    include 'index.view.php'
?>