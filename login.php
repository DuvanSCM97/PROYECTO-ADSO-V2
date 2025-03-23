<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$dbhost = "localhost";
$dbusuario = "root";
$dbpassword = "";
$dbname = "adqvehiculos";

$correo = $_POST["email"];
$contraseña = $_POST["password"];

$conn = new mysqli($dbhost, $dbusuario, $dbpassword, $dbname);

/* if ($conn->connect_error) {
    echo "Conexión fallida: " . $conn->connect_error;
} else {
    echo "Conexión exitosa";
}*/
$sql = 'SELECT * FROM loginusuarios WHERE CORRUSUARIO = "'.$correo . '" AND PASWUSER = "'. $contraseña . '"';
$result = $conn->query($sql);
if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()){
        echo "Bienvenido " . $row["NOMUSR"]; 
    }
} else {
    echo "Contraseña/Correo no existe o credenciales incorrectas.";
}


mysqli_close($conn);
?>

