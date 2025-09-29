<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de asistentes</title>
</head>
<body>
    <h1>Lista de la Compra</h1>
    <?php echo crearLista($dbh); ?>
    <br>
    <h2>Añadir elemento</h2>
    <form action="index.php" method="post">
        <input type="text" name="asistente" required>
        <input type="submit" name="Añadir" value="Añadir">
    </form>
    <br>
    <a href="index.php?vaciar=1">Vaciar lista</a>
</body>
</html>