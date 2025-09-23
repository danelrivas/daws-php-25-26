<?php
    $numSemana = $_GET["num"];

    function diaSemana($numSemana){
        switch($numSemana){
            case 1:
                $dia = "Lunes";
                break;
            case 2:
                $dia = "Martes";
                break; 
            case 3:
                $dia = "Miércoles";
                break; 
            case 4:
                $dia = "Jueves";
                break; 
            case 5:
                $dia = "Viernes";
                break; 
            case 6:
                $dia = "Sábado";
                break; 
            case 7:
                $dia = "Domingo";
                break;
            default:
                $dia = "Número no valido (1-7)";
        }
        return $dia;
    }

    $resultadoFuncion = diaSemana($numSemana);

    include 'index.view.php'
?>