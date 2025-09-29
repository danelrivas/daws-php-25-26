<?php
    session_start();

    $host = "127.0.0.1";
    $dbname = "hands1";
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

    // Crear lista
    if (!isset($_SESSION["lista"])) {
        $_SESSION["lista"] = [];
    }




    // Guardar
    if (isset($_POST["asistente"])){
        $elemento = $_POST["asistente"];
        $data = array("Elemento" => $elemento);
        $stmt= $dbh->prepare("
            INSERT INTO lista (Elemento)
            values (:Elemento)" 
        );
    }

    if (isset($_POST["Añadir"]) && !empty($_POST["asistente"])) {
        $stmt -> execute($data);
    }




    //Eliminar
    if (isset($_GET["eliminar"])){
        $elemento = $_GET["eliminar"];
        eliminarElemento($elemento, $dbh);
    }

    function eliminarElemento($elemento, $dbh){
        //echo $elemento;
        $data = array("elemento" => $elemento);
        $stmt= $dbh->prepare("
            DELETE FROM lista 
            WHERE Elemento = (:elemento)" 
        );
        $stmt -> execute($data);
    }




    // Vaciar 
    if (isset($_GET["vaciar"]) && $_GET["vaciar"] === "1") {
        $stmt= $dbh->prepare(
            "DELETE FROM lista"
        );
        $stmt -> execute();
    }




    // Mostrar
    function crearLista($dbh) {
        $stmt = $dbh -> prepare("SELECT * FROM lista");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt -> execute();


        $html = "<ul>";
        $stmt -> execute();
        while($row = $stmt->fetch()) {
            $html .= "<li>" . $row['Elemento'] . "<a href=index.php?eliminar=" . $row['Elemento'] . ">Eliminar</a></li>";
        }
        $html .= "</ul>";
        return $html;
    }

    include 'index.view.php';
?>
