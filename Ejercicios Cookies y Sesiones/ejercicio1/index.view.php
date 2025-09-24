<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_COOKIE["texto"]) != null){
            echo "Texto Cookie: " . $_COOKIE["texto"] . "<br>";
        } else {
            echo "No se ha introducido ningún texto.";
        }
    ?>
    <form action="index.php" method="post">
        Introduce el texto que deseas almacenar: 
        <input type="text" name="texto">
        <input type="submit" value="Guardar">
    </form>
</body>
</html>