<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App de Gestión de Empleados</title>
</head>
<body>
    <h1 style="text-align: center;">App de Gestión de Empleados</h1>
    <p style="text-align: center;">Bienvenido a la aplicacion de aprendizaje Gestión de Empleados. Este ejercicio tiene como objetivo repasar el acceso a datos mediante PDO y comenzar a seprar la logica de las páginas de la presentación y del acceso a datos.</p>
    <table>
        <tr>
            <td>
                <form action="index.php?accion=buscar" method="post">
                    Introduce un nombre: 
                    <input type="text" name="nombre" placeholder="Nombre del empleado">
                    <button type="submit">Filtrar</button>
                </form>
            </td>
        </tr>
        <tr>
            <td class="tdPrincipal td1">
                <table>
                    <tr>
                        <td colspan="4">
                            <h3>Listado de empleados</h3>
                        </td>
                    </tr>
                    <tr>
                        <th>DNI</td>
                        <th>Nombre</td>
                        <th>Apellidos</td>
                        <th>Opciones</td>
                    </tr>
                    <?php foreach ($empleados as $key => $empleado):?>
                    <tr>
                        <td><?= $empleado["dni"]?></td>
                        <td><?= $empleado["nombre"] ?></td>
                        <td><?= $empleado["apellidos"] ?></td>
                        <td><a href="index.php?accion=detalle&persona=<?= $empleado["id"] ?>">Ver detalles</a> | <a href="index.php?accion=eliminar&persona=<?= $empleado["id"] ?>">eliminar</a></td>
                    </tr>
                    <?php endforeach;?>
                </table>
                <p>* Opción secreta: <a href="index.php?accion=vaciar">Vaciar lista</a></p>
            </td>
            <td class="tdPrincipal td2">
                <form action="index.php?accion=añadir" method="post">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre"><br>
                    <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos"><br>
                    <input type="number" name="edad" id="edad" placeholder="Edad"><br>
                    <input type="date" name="fecha" id="fecha"><br>
                    <input type="text" name="email" id="email" placeholder="Email"><br>
                    <input type="text" name="dni" id="dni" placeholder="DNI"><br>
                    <select name="sexo" id="sexo">
                        <option value="hombre">Hombre</option>
                        <option value="mujer">Mujer</option>
                    </select><br>
                    <input type="textarea" name="curriculum" id="curriculum" placeholder="Curriculum"></input><br>
                    <a href="index.php?accion=añadir"><button>Añadir</button></a>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>