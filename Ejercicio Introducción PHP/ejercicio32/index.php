<?php
    $notas = [
        "Ane" => ["examen1" => 7, "examen2" => 4],
        "Markel" => ["examen1" => 9, "examen2" => 8],
        "Nora" => ["examen1" => 3, "examen2" => 6],
        "Danel" => ["examen1" => 5, "examen2" => 2]
    ];

    $tabla = "<table>
                <tr>
                    <th>Nombre</th>
                    <th>Nota1</th>
                    <th>Nota2</th>
                    <th>Nota Media</th>   
                </tr>";
    
    //EL as para el NOMBRE
    foreach($notas as $nombre => $value){
        $media = ($value["examen1"] + $value["examen2"]) / 2;
        $tabla .= "<tr>
                    <td>$nombre</td>
                    <td>" . $value["examen1"] . "</td>
                    <td>" . $value["examen2"] . "</td>
                    <td>$media</td>
                </tr>";
    }          

    $tabla .= "</table>";


    include 'index.view.php';
?>
