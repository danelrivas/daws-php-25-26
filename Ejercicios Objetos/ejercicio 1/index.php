<?php
    require_once 'Publicacion.php';

    function crearObjeto($autores, $año, $editorial, $titulo, $texto){
        $publicacion = new Publicacion($autores, $año, $editorial, $titulo, $texto);
        $cadena = " es muy bueno.";
        $publicacion->escribir($cadena);
        echo "<p><strong>Título:</strong> {$publicacion->titulo}</p>";
        echo "<p><strong>Autor:</strong> {$publicacion->autores}</p>";
        echo "<p><strong>Año:</strong> {$publicacion->año}</p>";
        echo "<p><strong>Editorial:</strong> {$publicacion->editorial}</p>";
        echo "<p><strong>Texto:</strong> {$publicacion->leer()}</p>";
    }

    include 'index.view.php';
?>