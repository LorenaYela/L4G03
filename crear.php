<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<title>Login</title>
        <meta charset=“UTF-8”>
        <meta name=“viewport” content=“width=device-width”>
    </head>
    <body>
        <form action="guardar_persona.php" method="post">
        <div>
         <h3>Crear persona</h3>
        </div>
        <div class="form-group">
            <label for="">Nombre</label><br>
            <input type=“text” name=“nombre” />
        </div>
        
        <div class="form-group">
            <label for="">Email</label><br>
            <input type="text" name=“email” />
        </div>
        <div>
            <br>
            <button type="submit">Guardar</button><br>
        </div>
        <a href="index.php">volver</a>
        </form>
</body>
</html>