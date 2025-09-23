<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1</title>
</head>
<body>
    <h1>CALCULADORA</h1>
    <form action="index.php" method="post">
        Último resultado: <?=$ultimoResultado?><br>
        Primer número: <input type="number" name="pnum"><br>
        Segundo número: <input type="number" name="snum"><br>
        Selecciones la operación deseada: 
        <select name="operacion">
            <option value="sumar">Suma</option>
            <option value="restar">Resta</option>
            <option value="multiplicar">Multiplicación</option>
            <option value="dividir">División</option>
        </select><br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>