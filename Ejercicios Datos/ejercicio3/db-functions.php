<?php
    require_once 'database.php';

    function selectById(){
        $dbh = getConnection();
        $stmt = $dbh->prepare('SELECT * FROM empleados WHERE id = :id');
        $stmt->execute(["id" => $_GET["persona"]]);
        $empleado = $stmt->fetch(PDO::FETCH_ASSOC);

        include 'detalle.view.php';
        exit; // Para evitar que se cargue index.view.php
    }

    function deleteById(){
        $dbh = getConnection();
        $data = array("id" => $_GET["persona"]);
        $stmt = $dbh -> prepare('DELETE FROM empleados WHERE id = :id');
        $stmt -> execute($data);
    }

    function deleteAll(){
        $dbh = getConnection();
        $stmt = $dbh -> query('DELETE FROM empleados');
        $stmt -> execute();
    }
?>