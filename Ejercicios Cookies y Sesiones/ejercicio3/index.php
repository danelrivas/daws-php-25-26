<?php
    if (isset($_POST["idioma"])) {
        $idioma = $_POST["idioma"];
        setcookie("idioma", $idioma, time() + 60); //1min
    }

    include 'index.view.php';
?>