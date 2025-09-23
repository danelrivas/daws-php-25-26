<?php
    $animales = ["ballena", "pajaro", "perro", "gato"];
    $colores = ["Verde", "Azul", "Negro", "Blanco"];

    $animal = $_GET["animal"];
    function añadirAnimal($animales, $animal){
        array_push($animales, $animal);
    }

    $color = $_GET["color"];
    function añadirColor($animales, $color){
        array_push($animales, $color);
    }

    //Ejecuccion
    $animalesCantidad = count($animales);
    $coloresCantidad = count($colores);
    añadirAnimal($animales, $animal);
    añadirColor($colores, $color);

    $animalesColores = array_merge($animales, $colores);

    include 'index.view.php';
?>  