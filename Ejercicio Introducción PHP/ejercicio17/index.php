<?php
    $usuario = $_GET["usuario"];
    $contraseña = $_GET["contraseña"];

    $usuarios = [
        "user1" => [
            "nombre" => "Danel",
            "password" => "123123",
            "email" => "danel@gmail.com"   
        ],
    ];

    function comprobar($usuario, $contraseña, $usuarios){
        //CUIDADO == NO =
        if ($usuarios["user1"]["nombre"] == $usuario) {
            if ($usuarios["user1"]["password"] == $contraseña){
                $resultado = "Has iniciado sesión";
            } else {
                $resultado = "La contraseña no es correcta";
            }
        } else {
            $resultado = "El usuario no es correcto";
        }
        return $resultado;
    }

    $resultadoFuncion = comprobar($usuario, $contraseña, $usuarios);

    include "index.view.php"; 
?>  