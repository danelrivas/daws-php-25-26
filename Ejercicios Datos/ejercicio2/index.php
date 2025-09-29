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
        }
    }


    function verDetalles($dbh){

    }

    function eliminarEmpleado($dbh){
        $data = array("id" => $_GET["persona"]);
        $stmt = $dbh -> query('DELETE FROM empleados WHERE id = :id');
        $stmt -> execute($data);
    }

    function vaciarLista($dbh){
        $stmt = $dbh -> query('DELETE FROM empleados');
        $stmt -> execute();
    }

    include 'index.view.php';
?>