<?php
    session_start();

    // Crear lista
    if (!isset($_SESSION["lista"])) {
        $_SESSION["lista"] = [];
    }

    // Guardar
    if (isset($_POST["Añadir"]) && !empty($_POST["asistente"])) {
        $_SESSION["lista"][] = htmlspecialchars($_POST["asistente"]);
    }

    // Vaciar 
    if (isset($_GET["vaciar"]) && $_GET["vaciar"] === "1") {
        $_SESSION["lista"] = [];
    }

    // Mostrar
    function crearLista() {
        $html = "<ul>";
        $total = count($_SESSION["lista"]);
        for ($i = 0; $i < $total; $i++) {
            $html .= "<li>" . $_SESSION["lista"][$i] . "</li>";
        }
        $html .= "</ul>";
        return $html;
    }

    include 'index.view.php';
?>
