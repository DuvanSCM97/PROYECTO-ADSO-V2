<?php
session_start();
$_SESSION['activo'] = 0;
$_SESSION['nombre'] = ""; 
session_destroy();
header("Location: ../Vista/index.php");
?>

