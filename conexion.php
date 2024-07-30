<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar el formulario si se ha enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recoger los datos del formulario
    $usuario = $_POST['admin-usuario'];
    $clave = $_POST['admin-clave'];

    // Validar que los campos no estén vacíos
    if (empty($usuario) || empty($clave)) {
        // Redirigir de vuelta al formulario de login sin mensaje de error
        header("Location: login.html");
        exit();
    }

    // Preparar la consulta SQL para verificar el usuario y la clave
    $sql = "SELECT * FROM administradores WHERE id = 1 AND usuario = ? AND clave = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error en la preparación de la consulta: " . $conn->error);
    }

    $stmt->bind_param("ss", $usuario, $clave);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar si se encontró un registro coincidente
    if ($result->num_rows > 0) {
        // Redirigir a home.php en caso de login exitoso
        header("Location: home.php");
        exit();
    } else {
        // Redirigir de vuelta al formulario de login sin mensaje de error
        header("Location: login.html");
        exit();
    }

    $stmt->close();
    $conn->close();
} else {
    // Si el formulario no ha sido enviado, redirigir al login
    header("Location: login.html");
    exit();
}
?>

