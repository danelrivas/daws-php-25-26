<?php
    $num1 = $_POST["pnum"];
    $num2 = $_POST["snum"];
    $operacion = $_POST["operacion"];
    $ultimoResultado = calculadora($num1, $num2, $operacion); 

    function calculadora($num1, $num2, $operacion){
        switch($operacion){
            case "sumar":
                return sumar($num1, $num2);
                break;
            case "restar":
                return restar($num1, $num2);
                break;
            case "multiplicar":
                return multiplicar($num1, $num2);
                break;
            case "dividir":
                return dividir($num1, $num2);
                break;
            default:
                return "Opción no válida";
                break;
        }
    }

    function sumar($num1, $num2){
        return $num1 + $num2;
    }

    
    function restar($num1, $num2){
        return $num1 - $num2;
    }

    
    function multiplicar($num1, $num2){
        return $num1 * $num2;
    }

    
    function dividir($num1, $num2){
        return $num1 / $num2;
    }

    include 'index.view.php';
?>