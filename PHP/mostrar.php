<?php
include 'db_config.php';

$sql = "SELECT id, sensor, fecha_hora, valor FROM registro";
$result = $conn->query($sql);

echo "<h2>Registro de Sensores</h2>";
echo "<table border='1'>
        <tr>
        <th>ID</th>
        <th>Sensor</th>
        <th>Fecha y Hora</th>
        <th>Valor</th>
        </tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["sensor"] . "</td>
                <td>" . $row["fecha_hora"] . "</td>
                <td>" . $row["valor"] . "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No hay registros.";
}

$conn->close();
?>