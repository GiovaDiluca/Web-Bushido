<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

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
    $mail->setFrom('BVESeal@gmail.com', 'BVESeal');
    $mail->addAddress('BVESeal@gmail.com'); // Cambia esto por tu dirección de correo

    // Validación y sanitización de entrada
    $nombre = filter_var(trim($_POST['nombre']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $mensaje = filter_var(trim($_POST['mensaje']), FILTER_SANITIZE_STRING);

    // Validar el correo electrónico
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('El correo electrónico no es válido.');
    }

    // Contenido del correo
    $mail->isHTML(true);
    $mail->Subject = 'Nuevo mensaje de contacto';
    $mail->Body = 'Nombre: ' . $nombre . '<br>Email: ' . $email . '<br>Mensaje: ' . nl2br($mensaje);

    // Enviar el correo
    $mail->send();

    // Mostrar mensaje de éxito y redirigir
    echo "<script>
            alert('El mensaje ha sido enviado con éxito.');
            window.location.href = 'indexcontacto.php';
          </script>";
    exit(); // Asegúrate de llamar a exit() después de la salida
} catch (Exception $e) {
    echo "No se pudo enviar el mensaje. Error: {$mail->ErrorInfo}";
}
?>