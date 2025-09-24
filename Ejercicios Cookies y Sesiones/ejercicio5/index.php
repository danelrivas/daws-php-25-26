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

if (!isset($_SESSION['usuario']) && isset($_POST['usuario']) && isset($_POST['contraseña'])) {
    $nombre = $_POST["usuario"];
    $contrasena = $_POST["contraseña"];

    if ($nombre === $usuario["nombre"] && $contrasena === $usuario["contraseña"]) {
        $_SESSION['usuario'] = $nombre;
    } else {
        $error = "Datos no válidos";
    }
}

include 'index.view.php';
?>
