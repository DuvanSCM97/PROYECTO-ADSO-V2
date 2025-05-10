<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../css/styles1.css">
</head>
<body>
    <div class="login-box">
        <h2><span>Ingresa tus datos </h2>
        <div class="user-icon">
            <img src="../images/usuario.png" alt="Usuario">
        </div>
        <form action="../php/login.php" method="POST">
        <input type="email" placeholder="Correo" name="email" required>
            <input type="password" placeholder="Contraseña" name="password" required>
            <div class="buttons"> 
                <button type="submit" class="btn-ingresar">INGRESAR</button>
            </div>
            <div class="forgot-password">
                <a href="../php/recuperarCon.php">¿Olvidaste tu contraseña?</a>
            </div>
        </form>
    </div>
</body>
</html>
