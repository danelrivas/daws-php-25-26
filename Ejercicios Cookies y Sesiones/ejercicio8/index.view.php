<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            gap: 50px;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div>
        <h1><?= $mensaje ?></h1>

        <h4>Selecciona un idioma</h4>
        <form action="index.php" method="post">
            <select name="idioma" id="idioma">
                <option value="español">Español</option>
                <option value="euskera">Euskera</option>
                <button type="input" value="guardar">Guardar</button>
            </select>
        </form>

        <h2>Cesta de la compra</h2>
        <?php 
            $precioTotal = 0;
            if (empty($productosSeleccionados)): 
        ?>
                <p>No hay productos en la cesta</p>
        <?php 
            else: 
        ?>
                <ul>
                    <?php 
                        foreach ($productosSeleccionados as $productoSeleccionado): 
                    ?>
                        <!-- De los elementos Producto quiero el nombre -->
                        <li><?= $productoSeleccionado["Nombre"] ?></li>
                        <?php $precioTotal += $productoSeleccionado["Precio"];?>
                    <?php 
                        endforeach; 
                    ?>
                </ul>
        <?php 
            endif; 
        ?>
        <?php if ($precioTotal != 0): ?>
            <h3>Precio total: </h3><?= $precioTotal ?>
            <a href="index.php?accion=vaciar">Cerrar sesión</a>
        <?php endif;?>
   
        <h1>Catálogo de productos</h1><br>
        <form action="index.php" method="post">
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                </tr>
                <?php foreach ($productos as $key => $producto): ?>
                    <tr>
                        <td><?= $producto["Nombre"] ?></td>
                        <td><?= $producto["Descripción"] ?></td>
                        <td><?= $producto["Precio"] ?>€</td>
                        <!-- Registra en la URL la clave del producto -->
                        <td><a href="index.php?accion=añadir&producto=<?= $key ?>">Comprar</a></td>
                    </tr>
                <?php endforeach ?>
            </table><br>    
        </form>
    </div>
    <div>
        <?php if (isset($enviado)): ?>
            <h1>Precio total:</h1>
            <p>El importe de la compra realizado es de <?= $precioTotal ?>€</p>
            <br>
            <h1>Detalle de la compra</h1>
            <ul>
                <?php foreach ($productosSeleccionadosCantidad as $key => $cantidad): ?>
                    <?php if ($cantidad != 0): ?>
                        <li><?= $productos[$key]["Nombre"] ?> (<?= $cantidad ?>)</li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>

</body>
</html>