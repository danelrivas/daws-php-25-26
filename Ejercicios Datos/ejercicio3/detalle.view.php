<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Empleado</title>
</head>
<body>
    <h2>Detalles del Empleado</h2>

    <?php if (isset($empleado)) : ?>
        <ul>
            <li><strong>ID:</strong> <?= $empleado['id'] ?></li>
            <li><strong>DNI:</strong> <?= $empleado['dni'] ?></li>
            <li><strong>Nombre:</strong> <?= $empleado['nombre'] ?></li>
            <li><strong>Apellidos:</strong> <?= $empleado['apellidos'] ?></li>
            <li><strong>Edad:</strong> <?= $empleado['edad'] ?></li>
            <li><strong>Sexo:</strong> <?= $empleado['sexo'] ?></li>
            <li><strong>Fecha de ingreso:</strong> <?= $empleado['fecha'] ?></li>
            <li><strong>Currículum:</strong> <pre><?= $empleado['curriculum'] ?></pre></li>
        </ul>
    <?php else : ?>
        <p>No se encontró el empleado.</p>
    <?php endif; ?>

    <br>
    <a href="index.php">Volver atrás</a>
</body>
</html>
