<?php
$servername = "andreacr.fun";
$username = "admin_shagy";
$password = "Shagy123";
$dbname = "admin_romerillo";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>