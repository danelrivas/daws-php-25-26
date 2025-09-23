<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1</title>
</head>
<body>
    <?php if ($resultado !== null): ?>
        <h2>Resultado de la conversión (<?= $temperatura . " " . $unidad ?>): <?= $resultado ?></h2>
    <?php endif; ?>
    <form action="index.php" method="post">
        Introduce la temperatura: <input type="text" name="temperatura"><br>
        Indica la unidad de la temperatura introducida: 
        <select name="unidad">
            <option value="celsius">Celsius</option>
            <option value="farenheit">Farenheit</option>
        </select><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>