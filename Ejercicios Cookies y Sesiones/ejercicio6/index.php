<?php
session_start();

$usuario = [
    "nombre" => "Danel",
    "contraseña" => "12345Abcde",
];

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
}

if (!isset($_SESSION['intentos'])) {
    $_SESSION['intentos'] = 0;
}

if ($_SESSION['intentos'] >= 2) {
    $error = "Has superado la cantidad de intentos";
} else {
    if (!isset($_SESSION['usuario']) && isset($_POST['usuario']) && isset($_POST['contraseña'])) {
        $nombre = $_POST["usuario"];
        $contrasena = $_POST["contraseña"];

        if ($nombre === $usuario["nombre"] && $contrasena === $usuario["contraseña"]) {
            $_SESSION['usuario'] = $nombre;
            $_SESSION['intentos'] = 0;
        } else {
            $error = "Datos no válidos";
            $_SESSION['intentos'] += 1;
        }
    }
}


include 'index.view.php';
?>
