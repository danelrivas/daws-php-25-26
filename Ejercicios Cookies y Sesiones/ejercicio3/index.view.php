<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_COOKIE["idioma"]) != null){
            echo "Idioma: " . $_COOKIE["idioma"] . "<br>";
        } else {
            echo "No se ha seleccionado ningún idioma.";
        }
    ?>
    <form action="index.php" method="post">
        Elige tu idioma: 
        <select name="idioma">
            <option value="castellano">Castellano</option>
            <option value="euskera">Euskera</option>
        </select>    
        <input type="submit" value="Guardar">
    </form>
</body>
</html>