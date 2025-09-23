<?php
    $estudiantes = ['Ane', 'Markel', 'Nora', 'Danel', 'Amaia', 'Izaro'];
    $lista = "<ul>";
    $cantidadEstudiantes = count($estudiantes);

    for($i = 0; $i < $cantidadEstudiantes; $i++){
        $nombre = $estudiantes[$i];
        $lista .= "<li>" . $nombre . "</li>";
    }
    //Forma de concatenar .= Strings

    $lista .= "</ul>";
    
    include 'index.view.php'
?>