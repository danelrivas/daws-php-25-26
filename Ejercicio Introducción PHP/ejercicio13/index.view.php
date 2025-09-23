<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <h1>ARRAYS</h1>
    <p>Cantidad Animales:
        <?php
            echo $animalesCantidad;
        ?>
    </p>
    <p>Cantidad Colores:
        <?php
            echo $coloresCantidad;
        ?>
    </p>
    <h3>Se añade 1 elemento en cada Array</h3>
    <p>Merge de los dos arrays:
        <?php
            var_export($animalesColores);
        ?>
    </p>
</body>
</html>