<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <nav class="navegador">
        <ul class="nav-links">
            <li class="logo">
                <a href="#"><img src="../images/logo3.png" alt="Logo"></a>
            </li>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="vehiculos.php">Vehículos</a></li>
            <li><a href="financieras.php">Financieras</a></li>
            <li><a href="contacto.php">Contactos</a></li>

            <?php if (isset($_SESSION['activo']) && $_SESSION['activo'] == 1): ?>
            <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] === "admin"): ?>
            <li><a href="../admin/solicitudes.php">Solicitudes</a></li>
            <li><a href="../admin/informes.php">Informe Concesionarios</a></li>
            <?php endif; ?>
            <li><a href="../html/Miperfil.php">Mi perfil</a></li>
            <li><a href="../html/notificaciones.php">Notificaciones</a></li>
            <li><a href="../php/cerrarsesion.php">Cerrar Sesión</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <header>
        <div class="video-background">
            <video autoplay loop muted playsinline poster="images/video-fallback.jpg">
                <source src="Video.mp4" type="video/mp4">
                Tu navegador no soporta la etiqueta de video.
            </video>
        </div>
        <div class="banner">
            <div class="header-content">
                <div class="content-text">
                    <h1>Validad y adquiere tu vehiculo</h1>
                    <p>
                        Esta pagina esta especialmente para ayudarte con tu sueño de adquirir vehiculo siempre y cuando
                        tengas en cuentas los requerimientos legales,
                        te agilizamos tramites prueba ahora mismo registrate y realiza los formularios
                    </p>
                    <?php
    if (isset($_SESSION['activo']) && $_SESSION['activo'] == 1){
    ?>
                    <p>Bienvenido <?php echo $_SESSION['nombre'] ?></p>
                    <?php
    } else {
    ?>
                    <a href="login.php" class="btn-1">Inicia sesión</a>
                    <a href="register.html" class="btn-1">Registrarse</a>
                    <?php
    }
    ?>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <main class="content-servevice">
            <h2 class="Titulo-servicios">Servicios</h2>
            <div class="Line"></div>
            <div class="servicios">
                <div class="service">
                    <a href="validar.php" class="service-link">
                        <img src="../images/validar.png" alt="">
                        <h4>Valida pendientes</h4>
                        <p>Validad multas, que no tengas pendientes con las entidades de transito.</p>
                    </a>
                </div>

                <div class="service">
                    <a href="vehiculos.php" class="service-link">
                        <img src="../images/coche.png" alt="">
                        <h4>Vehiculos y concecionarios</h4>
                        <p>Validad los concecionarios, puedes seleccionar el concecionario de tu preferencia</p>
                    </a>
                </div>

                <?php if (isset($_SESSION['activo']) && $_SESSION['activo'] == 1){  ?>
                <div class="service">
                    <a href="formularioR.php" class="service-link">
                        <img src="../images/requisito.png" alt="">
                        <h4>Formularios y requisitos</h4>
                        <p>Requisitos en este apartado puedes leer que requieres para cumplir mas rapido tu sueño de
                            tener vehiculo</p>
                    </a>
                </div>
                <?php  }else{ ?>
                <div class="service">
                    <a href="login.php" class="service-link">
                        <img src="../images/requisito.png" alt="">
                        <h4>Formularios y requisitos</h4>
                        <p>Requisitos en este apartado puedes leer que requieres para cumplir mas rapido tu sueño de
                            tener vehiculo</p>
                    </a>
                </div>
                <?php
            } ?>


                <div class="service">
                    <a href="contacto.php" class="service-link">
                        <img src="../images/operador.png" alt="">
                        <h4>Atención y Asesorias</h4>
                        <p>habla con un acesor</p>
                    </a>
                </div>
            </div>
        </main>
    </div>
    
    <div class="slogan" data-aos="fade-up" data-aos-duration="1000">
        <div class="img-text">
            <h2>Tu Sueño Sobre Ruedas Comienza Aquí</h2>
            <p class="text-slogan">
                Adquirir tu vehículo es más que una compra, es el inicio de nuevas rutas, la libertad de explorar y
                alcanzar tus sueños con cada kilómetro.
                En este camino, te acompañamos para que cada trámite sea tan fluido como tu viaje. Descubre cómo la
                conducción responsable abre puertas a beneficios exclusivos.
                Valoramos a los conductores que hacen la diferencia, aquellos que con cada giro del volante demuestran
                respeto y compromiso.
                Por ser un conductor <span class="highlight">EJEMPLAR</span>, tienes acceso a oportunidades únicas
                diseñadas para facilitar tu acceso al vehículo perfecto.
                No dejes que los trámites te detengan. Estamos aquí para agilizar el proceso y acercarte a la
                independencia y las experiencias que te esperan en la carretera.
                Regístrate ahora y da el primer paso hacia tu próxima gran aventura.
            </p>
        </div>
    </div>

    <footer>
    <div class="footer-top">
        <p>&copy; <?php echo date('Y'); ?> Duvan. Todos los derechos reservados.</p>
        <p>Este sitio web es para motivos educativos solamente.</p>
    </div>

    <div class="footer-bottom">
        <div class="social-icons">
            <a href="#" class="social-icon-link">
                <i class="fab fa-facebook-square"></i>
            </a>
             <a href="#" class="social-icon-link">
                <i class="fab fa-instagram-square"></i>
            </a>
             <a href="#" class="social-icon-link">
                <i class="fab fa-whatsapp-square"></i>
            </a>
        </div>
    </div>
</footer>

</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init(); // Initialize AOS
</script>

</html>