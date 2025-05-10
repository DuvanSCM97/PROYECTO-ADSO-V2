<?php
$correo = $_POST['correo'];

// Aquí conectas a la base de datos
$conn = new mysqli("localhost", "root", "", "adqvehiculos");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT * FROM loginusuarios WHERE CORRUSUARIO = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $correo);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    // Aquí normalmente generarías un token y enviarías un email con un link
    echo "<div style='text-align:center;padding:20px;font-family:sans-serif;'>✅ Se ha enviado un enlace de recuperación a tu correo (simulado).</div>";
} else {
    echo "<div style='text-align:center;padding:20px;font-family:sans-serif;'>❌ Correo no registrado.</div>";
}

$stmt->close();
$conn->close();

