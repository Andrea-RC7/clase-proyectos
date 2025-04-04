## Proyecto Tabla Registro

Este fue una de los primeras actividades hechas con php y base de datos la cual consistio en la creación de una tabla en una base de datos MySQL donde se insertan datos y se muestran en una página web. Se utiliza PHP y MySQL para gestionar la base de datos y la visualización de los datos.

```
CREATE DATABASE base de datos;

USE base de datos;

CREATE TABLE registro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sensor VARCHAR(50) NOT NULL,
    fecha_hora TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    valor FLOAT NOT NULL
);

```

Como siguente paso se configuro la conexion a la Base de Datos en un archivo almacena la configuración de la conexión a MySQL.

```
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
```

se crea otro archivo para insertar Datos en la Tabla el siguiente script permite insertar datos en la tabla registro desde PHP.

```<?php
include 'db_config.php';

$sql = "INSERT INTO registro (sensor, valor) VALUES ('temperatura', 22)";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
```
El ultimo archivo que crearemos en mostrara en la pagina los datos que se obtuvieron de la base de datos donde se encuentran almacenados.

```
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
```

En esta carpeta podras encontrar los codigos, cada uno de estos re subieron a la pagina para poder ver su funcionamiento.