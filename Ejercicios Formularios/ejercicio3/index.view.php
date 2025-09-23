<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1</title>
</head>
<body>
    <h1>CONTACTO</h1>
    <form action="index.php" method="post">
        Asunto: <input type="text" name="asunto"><br>
        Email: <input type="text" name="email"><br>
        Motivo: 
        <select name="motivo">
            <option value="soporte">Soporte técnico</option>
            <option value="informacion">Información productos</option>
            <option value="queja">Queja</option>
            <option value="Otro">Otro</option>
        </select><br>
        Mensaje <input type="textarea" name="mensaje"><br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>