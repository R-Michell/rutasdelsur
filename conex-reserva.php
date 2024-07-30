<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "login"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nombre_completo = $conn->real_escape_string($_POST['nombre_completo']);
    $correo_electronico = $conn->real_escape_string($_POST['correo_electronico']);
    $telefono = $conn->real_escape_string($_POST['telefono']);
    $direccion = $conn->real_escape_string($_POST['direccion']);
    $destino = $conn->real_escape_string($_POST['destino']);
    $numero_huespedes = intval($_POST['numero_huespedes']);
    $fecha_llegada = $conn->real_escape_string($_POST['fecha_llegada']);
    $fecha_salida = $conn->real_escape_string($_POST['fecha_salida']);

    
    $sql = "INSERT INTO reservas (nombre_completo, correo_electronico, telefono, direccion, destino, numero_huespedes, fecha_llegada, fecha_salida)
            VALUES ('$nombre_completo', '$correo_electronico', '$telefono', '$direccion', '$destino', '$numero_huespedes', '$fecha_llegada', '$fecha_salida')";

    if ($conn->query($sql) === TRUE) {
        echo "Reserva registrada exitosamente";
    } else {
        echo "Error al registrar la reserva: " . $conn->error;
    }
}


$conn->close();
?>
