<?php 

require 'conexion_be.php'; // Asegúrate de que esta ruta sea correcta

$db = new Database();
$conexion = $db->conectar(); // Asegúrate de que esto esté funcionando correctamente

// Verifica si la conexión fue exitosa
if (!$conexion) {
    die("Error de conexión: " . $conexion->getMessage()); // Cambiado para PDO
}

// Obtener los datos del formulario y sanitizarlos
$correo = trim($_POST['correo']);
$contrasena = trim($_POST['contrasena']);

// Validar que los campos no estén vacíos
if (empty($correo) || empty($contrasena)) {
    echo '
        <script> 
            alert("Por favor complete todos los campos");
            window.location = "../indexlogin.php" 
        </script>
    ';
    exit;
}

// Usar consultas preparadas para evitar inyecciones SQL
$sql = "SELECT contrasena FROM usuarios WHERE correo = :correo";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':correo', $correo);
$stmt->execute();

// Verificar si se encontró el usuario
if ($stmt->rowCount() > 0) {
    // Obtener el hash de la contraseña almacenada
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $stored_password = $row['contrasena'];

    // Verificar la contraseña ingresada con el hash almacenado
    if (password_verify($contrasena, $stored_password)) {
        // La contraseña es correcta, redirigir al usuario
        header("Location: ../../index.php");
        exit;
    } else {
        // La contraseña es incorrecta
        echo '
            <script> 
                alert("Contraseña incorrecta, por favor verifique los datos introducidos");
                window.location = "../indexlogin.php" 
            </script>
        ';
        exit;
    }
} else {
    // El correo no existe
    echo '
        <script> 
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location = "../indexlogin.php" 
        </script>
    ';
    exit;
}

?>