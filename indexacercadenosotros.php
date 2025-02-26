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
                    <img src="imagenes/sobre la empresa.jpeg" class="img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Acerca de nosotros</h5>
                        <p class="card-text">BUSHIDO-VE.CA es una empresa especializada en ingeniería y venta de sistemas de sellado de fluidos y accesorios para equipos estáticos y rotativos críticos que hace vida dentro de la industria petrolera nacional y actúa como representante de Nippon Pillar, una de las principales fábricas japonesas de alta tecnología en sellados de fluidos. Además de ser representantes oficiales de AIGI Enviromental Inc. empresa china que cuenta con alta tecnología en sistemas de sellados para equipos estáticos, también cuenta con la ejecución de actividades relacionadas con ventas técnicas especializadas, además de brindar el servicio post - venta; es decir, instalación y monitoreo del equipo, cumpliendo con las normativas correspondientes y los estándares internacionales vigentes. 
                        Actualmente la compañía tiene cinco años operando, y cuenta con un personal de amplia experiencia en el campo. La empresa tiene su sede principal en Maturín, estado Monagas, además de contar con oficinas en Lechería y El Tigre, Estado Anzoátegui; y Maracaibo, Estado Zulia.
                        </p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 2: Ocupa 6 espacios -->
            <div class="col-12 col-md-6">
                <div class="card text-center border-info mb-3">
                    <img src="imagenes/mision.jpeg" class="img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Misión</h5>
                        <p class="card-text">Ofrecer excelencia en materia de sistemas de sellado de fluidos al público, brindándoles atención y servicio especializado, así como confianza y satisfacción garantizada; convirtiéndose en la primera opción al momento de buscar soluciones efectivas en el campo de sellado de fluidos a nivel industrial.</p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 3: Ocupa 6 espacios -->
            <div class="col-12 col-md-6">
                <div class="card text-center border-info mb-3">
                    <img src="imagenes/Acerca de nosotros.jpg" class="img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Visión</h5>
                        <p class="card-text">
                        • Brindar atención personalizada en el estudio de campo y elaboración de propuestas.<br>
                        • Desarrollar sistemas de sellado de fluidos especializados, contando con las mejores marcas del mercado e instalación y puesta en marcha por profesionales altamente calificados.<br>
                        • Proporcionar el monitoreo del sistema instalado, así como la elaboración de informes técnicos periódicos sobre la condición de los activos y adiestramiento del personal involucrado.<br>
                        </p>
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