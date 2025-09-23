<?php
    $notas = [
        "Danel" => "10",
        "Maialen" =>"9",
        "Iker" =>"5",            
        "Medina" =>"8", 
        "Bryan" =>"-5",       
    ];

    function sacarNotas($notas){
        foreach($notas as $key => $value){
            echo "La nota de " . $key . " es: " . $value . "<br>";
        };
    }

    include 'index.view.php'
?>