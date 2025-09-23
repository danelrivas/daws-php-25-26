<?php
    $paises = ['Brasil', 'Portugal', 'Islandia', 'Mexico', 'Filipinas', 'Marruecos'];
    $pais = $_GET["pais"];

    function encontrarPais($paises, $pais){
        $tamañoArray = count($paises);
        //Cuidado con el operador < o >
        for ($i = 0; $i < $tamañoArray; $i++){
            if ($paises[$i] == $pais) {
                return "Posicion: " . $i . "| Pais: " . $pais;
            } 
            //No poner el -1 en el else porque entonces sobre escribe
        }
        return "Posicion: -1";
    }
    
    include 'index.view.php'
?>