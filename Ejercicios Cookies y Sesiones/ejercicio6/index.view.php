<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <?php if (isset($_SESSION['usuario'])): ?>
        <h2>Bienvenido, <?= $_SESSION['usuario'] ?>!</h2>
        <form method="post" action="index.php">
            <input type="hidden" name="logout" value="1">
            <button type="submit">Cerrar sesión</button>
        </form>
    <?php else: ?>
        <h2>Iniciar sesión</h2>
        <?php if (isset($error)): ?>
            <p style="color:red;"><?= $error ?></p>
        <?php endif; ?>
        <form method="post" action="index.php">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario" required><br><br>

            <label for="contraseña">Contraseña:</label>
            <input type="password" name="contraseña" id="contraseña" required><br><br>

            <input type="submit" value="Entrar">
        </form>
    <?php endif; ?>
</body>
</html>
