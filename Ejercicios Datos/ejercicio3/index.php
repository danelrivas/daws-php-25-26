<?php 
    $stmt = $dbh -> query('SELECT * FROM empleados');
    $empleados = $stmt -> fetchAll(PDO::FETCH_ASSOC);

    //ACCIONES
    if (isset($_GET["accion"])){
        switch ($_GET["accion"]){
            case "detalle":
                verDetalles($dbh);
                break;
            case "eliminar":
                eliminarEmpleado($dbh);
                break;
            case "vaciar":
                vaciarLista($dbh);
                break;
        }
    }


    function verDetalles($dbh){
        $stmt = $dbh->prepare('SELECT * FROM empleados WHERE id = :id');
        $stmt->execute(["id" => $_GET["persona"]]);
        $empleado = $stmt->fetch(PDO::FETCH_ASSOC);

        include 'detalle.view.php';
        exit; // Para evitar que se cargue index.view.php
    }


    function eliminarEmpleado($dbh){
        
        $data = array("id" => $_GET["persona"]);
        $stmt = $dbh -> prepare('DELETE FROM empleados WHERE id = :id');
        $stmt -> execute($data);
    }

    function vaciarLista($dbh){
        $stmt = $dbh -> query('DELETE FROM empleados');
        $stmt -> execute();
    }

    include 'index.view.php';
?>