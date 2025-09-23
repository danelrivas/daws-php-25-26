<?php
    $asunto = $_POST["asunto"];
    $email = $_POST["email"];
    $motivo = $_POST["motivo"];
    $mensaje = $_POST["mensaje"];

    function mostrarMensaje($asunto, $email, $motivo, $mensaje){
        return "¡Mensaje enviado!<br>
                Email: " . $email . "<br>". 
                "Asunto: " . $asunto . "<br>". 
                "Motivo: " . $motivo . "<br>". 
                "Mensaje: " . $mensaje . "<br>";
    }

    echo $mensaje = mostrarMensaje($asunto, $email, $motivo, $mensaje);

    include 'index.view.php';
?>