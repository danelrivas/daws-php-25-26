<?php
    $agenda = [
        [
            "nombre" => "Amaia",
            "apellidos" =>"Gorbea Jainaga" ,
            "telefono"=>"945111111" ,
            "email"=>"agorbea@php.net"
        ],
        [
            "nombre" => "Danel",
            "apellidos" =>"Rivas Gomez" ,
            "telefono"=>"657487146" ,
            "email"=>"danel@gmail.com"
        ],
    ];

    $tabla = "<table>
                <tr>
                    <th>NOMBRE</th>
                    <th>APELLIDOS</th>
                    <th>TELÉFONO</th>
                    <th>EMAIL</th>   
                </tr>";
    
    $cantidadAgenda = count($agenda);
    for($i = 0; $i < $cantidadAgenda; $i++){
        $tabla .= 
        "<tr><td>" 
        . $agenda[$i]["nombre"] . "</td><td>"
        . $agenda[$i]["apellidos"] . "</td><td>"
        . $agenda[$i]["telefono"] . "</td><td>"
        . $agenda[$i]["email"]      
        ."</td></tr>";
    };

    $tabla .= "</table>";

    include 'index.view.php'
?>