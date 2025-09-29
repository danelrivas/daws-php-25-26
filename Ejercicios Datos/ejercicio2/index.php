<?php 
    $host = "127.0.0.1";
    $dbname = "hands2";
    $user = "root";
    $pass = "";

    //ABRIR CONEXION
    function connect($host, $dbname, $user, $pass){
        try {
            # MySQL
            $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            return $dbh;
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    $dbh = connect($host, $dbname, $user, $pass);

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
            case "añadir":
                añadirEmpleado($dbh);
                break;
            default:
                echo"No existe esa accion";
        }
    }


    function verDetalles($dbh){
        $data = array(":id" => $_GET["persona"]);
        $stmt = $dbh->prepare("SELECT * FROM empleados WHERE id = :id");
        $stmt->execute($data);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        require 'detalle.view.php';
    }

    function eliminarEmpleado($dbh){
        $data = array("id" => $_GET["persona"]);
        $stmt = $dbh -> prepare(
            "DELETE FROM empleados WHERE id = :id"
        );
        $stmt -> execute($data);
    }

    function vaciarLista($dbh){
        $stmt = $dbh -> query('DELETE FROM empleados');
        $stmt -> execute();
    }

    function añadirEmpleado($dbh){
        $data = array(
            "nombre" => $_POST["nombre"],
            "apellidos" => $_POST["apellidos"],
            "edad" => $_POST["edad"],
            "fecha" => $_POST["fecha"],
            "email" => $_POST["email"],
            "dni" => $_POST["dni"],
            "sexo" => $_POST["sexo"],
            "curriculum" => $_POST["curriculum"]
        );
        $stmt = $dbh -> prepare(
            "INSERT INTO empleados (nombre, apellidos, edad, fecha, email, dni, sexo, curriculum)
            VALUES (:nombre, :apellidos, :edad, :fecha, :email, :dni, :sexo, :curriculum)"
        );
        $stmt -> execute($data);

    }

    include 'index.view.php';
?>