<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="../css/styleRC.css">
</head>
<body>
    <div class="login-box">
        <h2>Recuperar Contraseña</h2>
        <form action="procesar_recuperacion.php" method="POST">
            <input type="email" name="correo" placeholder="Ingresa tu correo" required>
            <div class="buttons">
                <button type="submit" class="btn-ingresar">Enviar enlace</button>
            </div>
        </form>
    </div>
</body>
</html>