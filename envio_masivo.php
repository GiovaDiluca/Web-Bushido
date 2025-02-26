<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'conexion_be.php'; // Incluir el archivo de conexión a la base de datos

$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Cambia esto por tu servidor SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'giovanni.28.gvm@gmail.com'; // Tu usuario SMTP
    $mail->Password = 'qdccfcyhraunmhqf'; // Tu contraseña SMTP
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    // Configuración del correo
    $mail->setFrom('BVESeal@gmail.com', 'BVESeal'); // Cambia esto por tu dirección de correo

    // Contenido del correo
    $mail->isHTML(true);
    $mail->Subject = 'Asunto del Correo';
    $mail->Body = 'Este es el contenido del correo.';

    // Obtener todos los usuarios
    $stmt = $pdo->query("SELECT nombre, correo FROM usuarios");
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Enviar correos a todos los usuarios
    foreach ($usuarios as $usuario) {
        $mail->addAddress($usuario['correo'], $usuario['nombre']); // Agregar destinatario

        // Enviar el correo
        if ($mail->send()) {
            echo "Correo enviado a: " . $usuario['correo'] . "<br>";
        } else {
            echo "No se pudo enviar el correo a: " . $usuario['correo'] . ". Error: {$mail->ErrorInfo}<br>";
        }

        // Limpiar la lista de destinatarios para el siguiente envío
        $mail->clearAddresses();
    }
} catch (Exception $e) {
    echo "Error: {$e->getMessage()}";
} catch (PDOException $e) {
    echo "Error de base de datos: {$e->getMessage()}";
}
?>