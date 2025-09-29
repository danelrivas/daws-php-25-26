<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">App de Gestión de Empleados</h1>
    <p style="text-align: center;">Bienvenido a la aplicacion de aprendizaje Gestión de Empleados. Este ejercicio tiene como objetivo repasar el acceso a datos mediante PDO y comenzar a seprar la logica de las páginas de la presentación y del acceso a datos.</p>
    <table>
        <?php foreach ($resultado as $row):?>
            <tr><td><?= $row ?></td></tr>
        <?php endforeach;?>
    </table>
</body>
</html>