<?php
$servername = "sql111.infinityfree.com"; // El host de la base de datos
$username = "if0_37668463"; // Tu usuario de MySQL
$password = "1lZwS3gmhXg"; // Tu contraseña de MySQL
$dbname = "if0_37668463_seguros"; // El nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa a la base de datos";

// Aquí puedes ejecutar consultas SQL, por ejemplo:
$sql = "SELECT * FROM usuarios"; // Cambia 'usuarios' por el nombre de tu tabla
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los datos de cada fila
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID_EMPLEADO"]. " - Nombre: " . $row["NOMBRE"]. " - Contraseña: " . $row["CONTRASENA"]. "<br>";
    }
} else {
    echo "0 resultados";
}

$conn->close(); // Cerrar la conexión
?>
