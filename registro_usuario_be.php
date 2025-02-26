<?php

require 'conexion_be.php';

$db = new Database();
$conexion = $db->conectar(); // Asegúrate de que esto esté funcionando correctamente

// Verificar si se han enviado los datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_completo = trim($_POST['nombre_completo']);
    $correo = trim($_POST['correo']);
    $usuario = trim($_POST['usuario']);
    $telefono = trim($_POST['telefono']); // Nuevo campo para teléfono
    $contrasena = trim($_POST['contrasena']);  // Almacenar la contraseña de forma segura


    // Validar el formato del correo electrónico
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo '
            <script>
                alert("El correo electrónico no es válido");
                window.location = "../indexlogin.php";
            </script>
        ';
        exit();
    }

    // Validar que los campos no estén vacíos
    if (empty($nombre_completo) || empty($usuario) || empty($contrasena) || empty($telefono)) { // Agregar teléfono aquí
        echo '
            <script>
                alert("Todos los campos son obligatorios");
                window.location = "../indexlogin.php";
            </script>
        ';
        exit();
    }

    // Verificar que el usuario no se repita en la base de datos
    $verificar_usuario = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
    $verificar_usuario->bindParam(':usuario', $usuario);
    $verificar_usuario->execute();

    if ($verificar_usuario->rowCount() > 0) {
        echo '
            <script>
                alert("Este usuario ya está registrado, intente con uno diferente");
                window.location = "../indexlogin.php";
            </script>
        ';
        exit();
    }

    // Hashear la contraseña antes de almacenarla
    $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);

    // Insertar el nuevo usuario en la base de datos
    $query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena, telefono) VALUES (:nombre_completo, :correo, :usuario, :contrasena, :telefono)"; // Agregar teléfono aquí
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':nombre_completo', $nombre_completo);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':contrasena', $hashed_password);
    $stmt->bindParam(':telefono', $telefono); // Vincular el nuevo campo

    if ($stmt->execute()) {
        echo '
            <script>
                alert("Registro completado exitosamente");
                window.location = "../indexlogin.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Fallo al registrar, inténtelo nuevamente");
                window.location = "../indexlogin.php";
            </script>
        ';
    }
} else {
    echo '
        <script>
            alert("Método de solicitud no permitido");
            window.location = "../indexlogin.php";
        </script>
    ';
}

?>