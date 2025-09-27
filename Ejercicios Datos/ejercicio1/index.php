<?php
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

    //SELECT
    $dbh = connect($host, $dbname, $user, $pass);
    $stmt = $dbh -> prepare("SELECT * FROM alumno");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt -> execute();
    while($row = $stmt->fetch()) {
        echo $row['nombre'] . "--";
        echo $row['apellidos'] . "--";
        echo $row['email'] . "--";
        echo $row['edad'] . "<br>";
    }


    //INSERT
    $data = array('nombre' => "Bryan", 'apellidos' => "Myers", 
                  'email' => "bbgay@gmail.com", 'edad'=>45);
    $stmt= $dbh->prepare("
        INSERT INTO alumno(nombre, apellidos, email, edad)
        values (:nombre, :apellidos, :email, :edad)" 
    );
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt -> execute($data);
    while($row = $stmt->fetch()) {
        echo $row['nombre'] . "--";
        echo $row['apellidos'] . "--";
        echo $row['email'] . "--";
        echo $row['edad'] . "<br>";
    }


    //CERRAR CONEXION
    $dbh = null;

    include 'index.view.php';
?>