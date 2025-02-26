<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bushido-Ve</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Estilofooter.css">
</head>

<body>
   <!--Barra superior-->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark -top">

<div class="container">

    <!--Logo-->
    <a href="index.php" class="navbar-brand"> <span class="text-primary">Bushido</span>Ve</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS"
        aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>

    </button>
    <!--Menu-->
    
    <div class="collapse navbar-collapse" id="navbarS">
    <form class="d-flex" role="search" action="indexproductos.php" method="GET">
<input class="form-control me-2" type="search" name="query" placeholder="Buscar" aria-label="Search">
<button class="btn btn-outline-success" type="submit">Buscar</button>
</form>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a href="index.php" class="nav-link">Inicio</a>
            </li>
            <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Iniciar Sesion
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="Login y Registro/indexlogin.php">Usuario</a>
            <a class="dropdown-item" href="admin/Login y Registro/indexloginadmin.php">Administrator</a>
            </div>
            </li>

            <li class="nav-item">
                <a href="indexsevicios.php" class="nav-link">Servicios</a>
            </li>
            <li class="nav-item">
                <a href="indexcontacto.php" class="nav-link">Contacto</a>
            </li>
        </ul>
        
    </div>

</div>

</nav>

<!--Contenido-->

 <!-- Sección -->
 <section class="services section-padding">
    <div class="container">
        <div class="row">
            <!-- Tarjeta 1: Ocupa 12 espacios -->
            <div class="col-12">
                <div class="card text-center border-info mb-3">
                    <img src="imagenes/Venta.jpeg" class="img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Venta de Sellos Mecánicos</h5>
                        <p class="card-text">Ofrecemos una amplia gama de sellos mecánicos de alta calidad para diversas aplicaciones industriales. Contamos con un equipo de expertos que te asesorarán en la elección del sello adecuado para tus necesidades específicas, considerando factores como:

Tipo de fluido: (agua, aceite, productos químicos, etc.)
Presión y temperatura de trabajo:
Velocidad de rotación:
Tipo de equipo: (bombas, compresores, agitadores, etc.)
Normativa y estándares:

Trabajamos con las mejores marcas del mercado y te garantizamos productos duraderos y de alto rendimiento. Además, te ofrecemos:

Asesoramiento técnico personalizado:
Precios competitivos:
Amplio stock de productos:
Entrega rápida y eficiente:</p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 2: Ocupa 6 espacios -->
            <div class="col-12 col-md-6">
                <div class="card text-center border-info mb-3">
                    <img src="imagenes/instalacion.jpeg" class="img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Instalación de Sellos Mecánicos</h5>
                        <p class="card-text">Contamos con un equipo de técnicos altamente capacitados y con experiencia en la instalación de sellos mecánicos de todo tipo. Te ofrecemos un servicio de instalación profesional y garantizado, que incluye:

Evaluación de las condiciones de operación:
Preparación de la superficie de sellado:
Montaje y ajuste del sello mecánico:
Pruebas de funcionamiento:
Capacitación del personal:

Nos aseguramos de que la instalación se realice de manera correcta y segura, para garantizar el óptimo funcionamiento del sello mecánico y prolongar su vida útil.</p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 3: Ocupa 6 espacios -->
            <div class="col-12 col-md-6">
                <div class="card text-center border-info mb-3">
                    <img src="imagenes/Mantenimiento.jpeg" class="img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Mantenimiento de Sellos Mecánicos
                        </h5>
                        <p class="card-text">
                        Ofrecemos servicios de mantenimiento preventivo y correctivo para sellos mecánicos, con el objetivo de:

Prevenir fallas y fugas:
Prolongar la vida útil de los sellos:
Reducir costos de reparación:
Garantizar la seguridad de las operaciones:

Nuestros servicios de mantenimiento incluyen:

Inspección y evaluación del sello mecánico:
Limpieza y lubricación:
Reemplazo de componentes desgastados:
Ajuste y calibración:
Análisis de fallas:

Te ofrecemos programas de mantenimiento personalizados, adaptados a tus necesidades y presupuesto.</p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





    <!--Parte inferior-->

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