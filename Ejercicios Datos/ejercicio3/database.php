<?php
    require_once 'config.php';
    $dbConnection = null;

    function getConnection(){
        global $dbConnection;

        if ($dbConnection == null){
            try {
                # MySQL
                $dbConnection = new PDO(
                    "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
                    DB_USER,
                    DB_PSWD
                );
                $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	            return $dbConnection;
            }
            catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
?>