<?php
    session_start();

    // Crear lista
    if (!isset($_SESSION["lista"])) {
        $_SESSION["lista"] = [];
    }

    // Añadir
    if (isset($_POST["Añadir"]) && !empty($_POST["asistente"])) {
        $_SESSION["lista"][] = $_POST["asistente"];
    }

    // Vaciar
    if (isset($_GET["vaciar"]) && $_GET["vaciar"] === "1") {
        $_SESSION["lista"] = [];
    }

    include 'index.view.php';
?>
