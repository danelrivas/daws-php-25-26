<?php
    if (isset($_POST["gCookie"])){

        if (isset($_POST["texto"])) {
            $texto = $_POST["texto"];
            setcookie("texto", $texto, time() + 3600); //1h
        }

    } else if(isset($_POST["eCookie"])){

        setcookie("texto", "", -1);

    }

    include 'index.view.php';
?>
