<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <h1>FOR Y ARRAY MULTIDIMENSIONAL</h1>
    <table border="1">
        <tr>
            <th>NOMBRE</th>
            <th>APELLIDOS</th>
            <th>TELÉFONO</th>
            <th>EMAIL</th>   
        </tr>
        <?php foreach($agenda as $contacto):?>
            <tr>
                <td><?= $contacto['nombre'] ?></td>
                <td><?= $contacto['apellidos'] ?></td>
                <td><?= $contacto['telefono'] ?></td>
                <td><?= $contacto['email'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>