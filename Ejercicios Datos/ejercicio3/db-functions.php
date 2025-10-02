<?php
    require_once 'database.php';

    function selectById($id){
        $dbh = getConnection();
        $stmt = $dbh->prepare('SELECT * FROM empleados WHERE id = :id');
        $stmt->execute(['id' => $id]); // $id debe ser un número
        $empleado = $stmt->fetch(PDO::FETCH_ASSOC);

        include 'detalle.view.php';
        exit; // Para evitar que se cargue index.view.php
    }


    function deleteById($id){
        $dbh = getConnection();
        $data = array("id" => $id);
        $stmt = $dbh -> prepare('DELETE FROM empleados WHERE id = :id');
        $stmt -> execute($data);
    }

    function deleteAll(){
        $dbh = getConnection();
        $stmt = $dbh -> query('DELETE FROM empleados');
        $stmt -> execute();
    }

    function selectAll(){
        $dbh = getConnection();
        $stmt = $dbh -> query('SELECT * FROM empleados');
        return  $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }

    function insert($dni, $nombre, $apellidos, $edad, $sexo, $fecha, $curriculum){
        try {
            $dbh = getConnection();
            $data = array(
                "dni" => $dni,
                "nombre" => $nombre,
                "apellidos" => $apellidos,
                "edad" => $edad,
                "sexo" => $sexo,
                "fecha" => $fecha,
                "curriculum" => $curriculum
            );
            $stmt = $dbh->prepare(
                "INSERT INTO empleados (dni, nombre, apellidos, edad, sexo, fecha, curriculum)
                VALUES (:dni, :nombre, :apellidos, :edad, :sexo, :fecha, :curriculum)"
            );     

            $stmt->execute($data);
            echo "Empleado insertado correctamente";
        } catch (PDOException $e) {
            echo "Error al insertar: " . $e->getMessage();
        }
    }

    function selectByName($nombre) {
        $dbh = getConnection();
        $stmt = $dbh->prepare('SELECT * FROM empleados WHERE nombre = :nombre');
        $stmt->execute(['nombre' => $nombre]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

?>