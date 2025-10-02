<?php
    require_once 'db-functions.php';

    //Coger todos 
    $empleados = selectAll();

    //ACCIONES
    if (isset($_GET["accion"])){
        switch ($_GET["accion"]){
            case "detalle":
                selectById($_GET['persona']);
                break;
            case "eliminar":
                deleteById($_GET['persona']);
                break;
            case "vaciar":
                deleteAll();
                break;
            case "añadir":
                insertar();
                break;
            case "buscar":
                $nombre = $_POST['nombre'] ?? '';
                $empleados = selectByName($nombre);
                break;
        }
    }

    function insertar(){
        $dni = $_POST['dni'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];
        $fecha = $_POST['fecha'];
        $curriculum = $_POST['curriculum'];
        echo $_POST['nombre'];

        insert($dni, $nombre, $apellidos, $edad, $sexo, $fecha, $curriculum);
    }

    include 'index.view.php';
?>