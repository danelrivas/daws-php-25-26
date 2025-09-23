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
    
    //No se necesita $i ni FOR
    foreach($agenda as $value){
        $tabla .= 
        "<tr><td>" 
        . $value["nombre"] . "</td><td>"
        . $value["apellidos"] . "</td><td>"
        . $value["telefono"] . "</td><td>"
        . $value["email"]      
        ."</td></tr>"; 
    };

    $tabla .= "</table>";

    include 'index.view.php'
?>