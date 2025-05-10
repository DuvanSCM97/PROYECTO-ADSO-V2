<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$dbhost = "localhost";
$dbusuario = "root";
$dbpassword = "";
$dbname = "adqvehiculos";

$correo = $_POST["email"];
$contraseña = $_POST["password"];

$conn = new mysqli($dbhost, $dbusuario, $dbpassword, $dbname);

if ($correo === "admi@gmail.com" && $contraseña === "admi") {
    $_SESSION['activo'] = 1;
    $_SESSION['nombre'] = "Administrador";
    $_SESSION['correo'] = "admin@adqvehiculos.com"; // Simbólico
    $_SESSION['rol'] = "admin"; // Marcamos como admin
    header("Location: ../html/index.php");
    exit();
}

/* if ($conn->connect_error) {
    echo "Conexión fallida: " . $conn->connect_error;
} else {
    echo "Conexión exitosa";
}*/

$sql = 'SELECT * FROM loginusuarios WHERE CORRUSUARIO = "'.$correo . '" AND PASWUSER = "'. $contraseña . '"';
$result = $conn->query($sql);
if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()){
        $_SESSION['activo'] = 1;
        $_SESSION['nombre'] = $row["NOMUSR"]; 
        $_SESSION['correo'] = $row["CORRUSUARIO"];
        echo "Bienvenido " . $row["NOMUSR"]; 
        header("Location: ../html/index.php");
    }
} else {
    echo "Contraseña/Correo no existe o credenciales incorrectas.";
}


mysqli_close($conn);
?>

