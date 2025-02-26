<?php
require 'Login y Registro/php/conexion_be.php'; // Asegúrate de que la ruta sea correcta

// Crear una instancia de la clase Database
$database = new Database();
$conn = $database->conectar(); // Obtener la conexión

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    // Manejo de la carga de la imagen
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['imagen']['tmp_name'];
        $fileName = str_replace(' ', '_', $_FILES['imagen']['name']); // Reemplazar espacios por guiones bajos
        $dest_path = './uploads/' . $fileName; // Ruta donde se guardará la imagen

        // Validar la extensión del archivo
        $allowedfileExtensions = array('jpg', 'gif', 'png', 'jpeg');
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        if (in_array($fileExtension, $allowedfileExtensions)) {
            // Mover el archivo a la carpeta de destino
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                // Preparar y ejecutar la consulta para almacenar la ruta de la imagen
                $stmt = $conn->prepare("INSERT INTO productos (nombre, descripcion, imagen) VALUES (?, ?, ?)");
                $stmt->execute([$nombre, $descripcion, $dest_path]); // Almacenar la ruta completa
            } else {
                echo 'Error al mover el archivo a la carpeta de destino.';
            }
        } else {
            echo 'Extensión de archivo no permitida. Solo se permiten imágenes JPG, GIF, PNG y JPEG.';
        }
    } else {
        echo 'Error en la carga del archivo: ' . $_FILES['imagen']['error'];
    }
}
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
    <a href="admin/inicio.php" class="navbar-brand"> <span class="text-primary">BUSHIDO</span>VE</a>
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
       
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Administrador</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">admin</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">USUARIOS</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="admin/Adminstrar usuarios.php">VER MAS</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">INSERTAR PRODUCTOS</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="Insertarproductos.php">VER MAS</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">ENVIAR NOVEDADES</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="admin/Envio_novedades.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>


    
                        <div class="container mt-5">
        <h1>Registro de Productos</h1>

        <form method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="nombre">Nombre del Producto:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
                <div class="invalid-feedback">Por favor, ingresa el nombre del producto.</div>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
                <div class="invalid-feedback">Por favor, ingresa una descripción.</div>
            </div>

        

            <div class="form-group">
                <label for="imagen">Selecciona la Imagen:</label>
                <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
                <div class="invalid-feedback">Por favor, selecciona una imagen.</div>
            </div>

            <button type="submit" class="btn btn-primary">Agregar Producto</button>
        </form>

        <h2 class="mt-5">Productos Registrados</h2>
        <ul class="list-group">
            <?php
            // Obtener productos de la base de datos
            $result = $conn->query("SELECT * FROM productos");
            while ($producto = $result->fetch(PDO::FETCH_ASSOC)): ?>
                <li class="list-group-item">
                    <h3><?php echo htmlspecialchars($producto['nombre']); ?></h3>
                    <p><?php echo htmlspecialchars($producto['descripcion']); ?></p>
                    <img src="<?php echo htmlspecialchars($producto['imagen']); ?>" alt="<?php echo htmlspecialchars($producto['nombre']); ?>" style="width:100px;">
                </li>
            <?php endwhile; ?>
        </ul>

        <?php
        // No es necesario cerrar la conexión, ya que PDO lo hace automáticamente al final del script
        ?>
    </div>

    <script>
        // Ejemplo de validación de formulario
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                for (var i = 0; i < forms.length; i++) {
                    forms[i].addEventListener('submit', function(event) {
                        if (this.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        this.classList.add('was-validated');
                    }, false);
                }
            }, false);
        })();
    </script>     
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
            </div>
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