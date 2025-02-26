<?php
session_start(); // Asegúrate de iniciar la sesión

function esNulo(array $parametros) // Corregido el nombre de la variable
{
    foreach ($parametros as $parameto) { // Agregado el signo de dólar
        if (strlen(trim($parameto)) < 1) {
            return true;
        }
    }
    return false;
}

function login($usuario, $password, $con)
{
    // Validar que los parámetros no sean nulos
    if (esNulo([$usuario, $password])) {
        return 'El usuario y/o contraseña no pueden estar vacíos.';
    }

    $sql = $con->prepare("SELECT id, usuario, contrasena, nombre FROM admin WHERE usuario = ? AND activo = 1 LIMIT 1");
    
    if ($sql->execute([$usuario])) { // Manejo de errores en la ejecución
        if ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            if (password_verify($password, $row['contrasena'])) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['nombre'];
                $_SESSION['user_type'] = 'admin';
                header('Location: inicio.php');
                exit;
            }
        }
    } else {
        return 'Error en la consulta.';
    }

    return 'El usuario y/o contraseña son incorrectos.';
}

function mostrarMensajes(array $errors)
{
    if(count($errors) > 0) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><ul>';
        foreach ($errors as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '<ul>';
        echo '<button type="button" class="btn-close" data-bs-dismiss="alert"
        aria-label="Close"></button></div>';
    }

}
?>