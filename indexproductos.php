<?php
require 'Login y Registro/php/conexion_be.php';
$db = new Database();
$con = $db->conectar();

// Obtener la consulta de búsqueda
$query = isset($_GET['query']) ? $_GET['query'] : '';

// Preparar la consulta SQL para buscar en nombre, descripcion y categoria
if ($query) {
    $sql = "SELECT id, nombre, descripcion, imagen FROM productos WHERE nombre LIKE :query";
    $stmt = $con->prepare($sql);
    $searchTerm = "%" . $query . "%"; // No es necesario escapar aquí
    $stmt->bindParam(':query', $searchTerm); // Vincula el parámetro
} else {
    // Si no hay consulta, obtener todos los productos activos
    $sql = "SELECT id, nombre, descripcion, imagen FROM productos";
    $stmt = $con->prepare($sql);
}

$stmt->execute(); // Ejecuta la consulta
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUSHIDO-VE</title>
    <link rel="stylesheet" href="Estilo.css">  
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Estilofooter.css">
</head>

<body>
 <!--Barra superior-->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark -top">

<div class="container">

    <!--Logo-->
    <a href="index.php" class="navbar-brand"> <span class="text-primary">BUSHIDO</span>VE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS"
        aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>

    </button>
    <!--Menu-->
    
    <div class="collapse navbar-collapse" id="navbarS">
    <form class="d-flex" role="search" action="indexproductos.php" method="GET">
<input class="form-control me-2" type="search" name="query" placeholder="Buscar" aria-label="Search">
<button class="btn btn-outline-success" type="submit">BUSCAR</button>
</form>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a href="index.php" class="nav-link">INICIO</a>
            </li>
            <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    INICIAR SESION
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="Login y Registro/indexlogin.php">USUARIO</a>
            <a class="dropdown-item" href="admin/Login y Registro/indexloginadmin.php">ADMINISTRADOR</a>
            </div>
            </li>

            <li class="nav-item">
                <a href="indexsevicios.php" class="nav-link">SERVICIOS</a>
            </li>
            <li class="nav-item">
                <a href="indexcontacto.php" class="nav-link">CONTACTO</a>
            </li>
        </ul>
        
    </div>

</div>

</nav>


   <div class="container mt-4"> <!-- Contenedor para los productos -->
    <div class="row"> <!-- Fila para los productos -->
        <?php 
        // Mostrar resultados
        if ($stmt->rowCount() > 0) {
            foreach ($resultado as $producto) {
                echo '<div class="col-md-4">'; // Cambia a col-md-4 para 3 columnas
                echo '<div class="card mb-3">'; // Clase mb-3 para margen inferior
                // Asegúrate de que 'imagen' contenga la ruta correcta
                echo '<img src="' . htmlspecialchars($producto["imagen"]) . '" class="card-img-top" alt="' . htmlspecialchars($producto["nombre"]) . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . htmlspecialchars($producto["nombre"]) . '</h5>';
                echo '<p class="card-text">' . htmlspecialchars($producto["descripcion"]) . '</p>';
                echo '</div>';
                echo '</div>'; // Cierra la tarjeta
                echo '</div>'; // Cierra la columna
            }
        } else {
            echo "<p>No se encontraron productos.</p>";
        }
        ?>
    </div> <!-- Cierra la fila -->
</div> <!-- Cierra el contenedor -->
    <!-- Parte inferior -->
    <footer>
        <div class="container__footer">
                <div class="box__footer">
                <h2>Soluciones</h2>
                <a href="https://www.google.com">App Desarrollo</a>
                <a href="#">App Marketing</a>
                <a href="#">IOS Desarrollo</a>
                <a href="#">Android Desarrollo</a>
            </div>
            <div class="box__footer">
                <h2>Compañia</h2>
                <a href="#">Acerca de</a>
                <a href="#">Trabajos</a>
                <a href="#">Procesos</a>
                <a href="#">Servicios</a>              
            </div>
            <div class="box__footer">
                <h2>Redes Sociales</h2>
                <a href="#"> <i class="fab fa-facebook-square"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
                <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
                <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
            </div>
        </div>

        <div class="box__copyright">
            <hr>
            <p>Todos los derechos reservados © 2025 <b>BUSHIDO-VE</b></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script> 
        <!-- jQuery y Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>