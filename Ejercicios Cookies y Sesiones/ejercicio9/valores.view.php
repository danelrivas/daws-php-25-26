<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalles del Producto</title>
    <style>
    * {
        padding: 0;
        margin: 0;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    table {
        border-collapse: collapse;
    }

    td,
    th {
        border-top: 1px solid lightgrey;
        padding: 8px
    }

    body {
        display: flex;
        flex-direction: column;
        gap: 50px;
        justify-content: center;
        align-items: center;
        width: 100vw;
        height: 100vh;
    }
    </style>
</head>
<body>
    <?php if ($valoresProducto): ?>
        <h1>Detalles del Producto</h1>
        <p><strong>Nombre:</strong> <?= $valoresProducto[0] ?></p>
        <p><strong>Descripción:</strong> <?= $valoresProducto[1] ?></p>
    <?php else: ?>
        <p>Producto no encontrado.</p>
    <?php endif; ?>
    <a href="index.php">Volver</a>
</body>
</html>