<?php
    if (isset($_POST["texto"])) {
        $texto = $_POST["texto"];
        setcookie("texto", $texto, time() + 3600); //1h
    }

    include 'index.view.php'
?>
