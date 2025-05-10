<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$dbhost = "localhost";
$dbusuario = "root";
$dbpassword = "";
$dbname = "adqvehiculos";

$conn = new mysqli($dbhost, $dbusuario, $dbpassword, $dbname);

$usuario = null;

if (isset($_SESSION['correo'])) {
    $sql = 'SELECT * FROM usuario WHERE CORRUSR = "'.$_SESSION['correo'].'"';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Perfil</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .perfil-container {
            max-width: 600px;
            margin: 80px auto;
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
            text-align: left;
        }

        .perfil-container h2 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        .perfil-datos p {
            font-size: 1.1em;
            color: #555;
            margin: 12px 0;
        }

        .perfil-datos strong {
            color: #000;
        }
    </style>
</head>
<body>

<?php if ($usuario): ?>
    <div class="perfil-container">
        <h2>Mi Perfil</h2>
        <div class="perfil-datos">
            <p><strong>Nombre:</strong> <?= htmlspecialchars($usuario['NOMUSR']) ?></p>
            <p><strong>Cédula:</strong> <?= htmlspecialchars($usuario['ID_Usuario']) ?></p>
            <p><strong>Tipo de documento:</strong> <?= htmlspecialchars($usuario['TIPDOC']) ?></p>
            <p><strong>Teléfono:</strong> <?= htmlspecialchars($usuario['TELUSR']) ?></p>
            <p><strong>Correo:</strong> <?= htmlspecialchars($usuario['CORRUSR']) ?></p>
            <p><strong>Categoría licencia:</strong> <?= htmlspecialchars($usuario['CATLICEN']) ?></p>
        </div>
        <div class="btn-container">
            <a href="index.php" class="btn">Volver al inicio</a><br>
            <a href="editarPerfil.php" class="btn">Editar información</a>
        </div>
    </div>
<?php else: ?>
    <p style="text-align:center; margin-top: 100px;">No se encontró información del usuario.</p>
<?php endif; ?>

</body>
</html>

