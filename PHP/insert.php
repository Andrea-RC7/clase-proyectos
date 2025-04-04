<?php
include 'db_config.php';

$sql = "INSERT INTO registro (sensor, valor) VALUES ('temperatura', 22)";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>