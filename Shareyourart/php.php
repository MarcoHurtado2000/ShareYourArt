<?php
// Configuración de la conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu servidor de MySQL no está en localhost
$username = "marco2"; // Cambia esto por tu nombre de usuario de MySQL
$password = "1005878781Ms"; // Cambia esto por tu contraseña de MySQL
$database = "shareyourart"; // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre_curso = $_POST['nombre_curso'];
$duracion = $_POST['duracion'];
$categoria = $_POST['categoria'];
$descripcion = $_POST['descripcion'];

// Preparar la consulta SQL
$sql = "INSERT INTO cursos (nombre_curso, duracion, categoria, descripcion) VALUES ('$nombre_curso', '$duracion', '$categoria', '$descripcion')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Curso insertado correctamente.";
} else {
    echo "Error al insertar curso: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
