<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "login"; 

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_completo = $conn->real_escape_string($_POST['nombre_completo']);
    $correo_electronico = $conn->real_escape_string($_POST['correo_electronico']);
    $telefono = $conn->real_escape_string($_POST['telefono']);
    $direccion = $conn->real_escape_string($_POST['direccion']);

    $sql = "INSERT INTO usuarios (nombre_completo, correo_electronico, telefono, direccion)
            VALUES ('$nombre_completo', '$correo_electronico', '$telefono', '$direccion')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario registrado exitosamente";
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }
}

$conn->close();
?>
