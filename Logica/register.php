<?php
// Mostrar errores para depuración
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Conexión a la base de datos
$dbhost = "localhost";
$dbusuario = "root";
$dbpassword = "";
$dbname = "adqvehiculos";

$ID_Usuario = $_POST['ID_Usuario'];
$TIPDOC = $_POST['TIPDOC'];
$nombre = $_POST["nombre"];
$Telef = $_POST['Telusr'];
$correo = $_POST["correo"];
$TIPLIC = $_POST['TIPLIC'];
$contrasena = $_POST["contrasena"];// Encriptar contraseña

$conn = new mysqli($dbhost, $dbusuario, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del Registro</title>
    <link rel="stylesheet" href="../css/styleRM.css">
</head>
<body>

<?php


//Consultar
$sql = 'SELECT * FROM usuario WHERE CORRUSR = "'.$correo.'" OR ID_Usuario ='.$ID_Usuario;
$result = $conn->query($sql);

if ($result->num_rows > 0) { 
    echo '<div class="message error">⚠️ El usuario ya ha sido registrado.</div>';
} else {
    //Insertar
// Preparar e insertar
$sql = "INSERT INTO loginusuarios (CORRUSUARIO, PASWUSER, NOMUSR) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Error al preparar la consulta: " . $conn->error);
}

    $stmt->bind_param("sss",$correo, $contrasena, $nombre);

    if ($stmt->execute()) {
       echo '<div class="message success">✅ Registro exitoso. <a href="../html/login.php">Iniciar sesión</a></div>';
    } else {
        echo '<div class="message error">❌ Error al registrar: ' . $stmt->error . '</div>';
    }


    $sql = "INSERT INTO usuario (ID_Usuario,TIPDOC,NOMUSR,TELUSR,CORRUSR,CATLICEN) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
    die("Error al preparar la consulta: " . $conn->error);
    }

    $stmt->bind_param("ssssss", $ID_Usuario,$TIPDOC,$nombre,$Telef,$correo,$TIPLIC);

    if ($stmt->execute()) {
        echo '<div class="message success">✅ Registro exitoso. <a href="../html/login.php">Iniciar sesión</a></div>';
    } else {
        echo '<div class="message error">❌ Error al registrar: ' . $stmt->error . '</div>';
    }

    $stmt->close();
}
$conn->close();




?>
