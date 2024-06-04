<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Página web, diseño de página web, pagina web precio">
    <meta name="description" content="Desarrollo y diseño de páginas web en Guadalajara">
    <meta name="robots" content="index,follow">
    <title>Diseño de páginas web Guadalajara. Te hacemos tu página web a la medida. - El Creador Web</title>
    <link rel="stylesheet" href="./assets/styles.css">
    <link rel="shortcut icon" href="../assets/favicon.svg" type="image/x-icon">
</head>

<body class="">

    <div id="onload">
        <div class="spinner">
            <div class="lds-roller ">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <header>
        <div class="nav">
            <input type="checkbox" id="nav-check">
            <div class="nav-header">
                <a class="nav-title">
                    <img height="40px" src="../assets/img/logo.png" alt="">
                </a>
            </div>
            <div class="nav-btn">
                <label for="nav-check">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            </div>

            <div class="nav-links">
                <a href="#about">Nosotros</a>
                <a href="#services">Servicios</a>
                <a href="#calculator">Precios</a>
                <a href="#contact">Contactar</a>
            </div>
        </div>
    </header>

    <section class="hero">
        <div>
            <p>Desarrollo y Diseño de</p>
              <h1><strong>Páginas Web</strong></h1>
            <a href="#calculator">PRECIOS</a>
        </div>


        <div class="social-media">
            <a href="https://www.tiktok.com/@elcreadorweb" target="_blank">
                <img src="../assets/icons/tiktok.png" alt="tiktok">
            </a>
            <a href="https://www.facebook.com/profile.php?id=100094863716753" target="_blank">
                <img src="../assets/icons/facebook.png" alt="facebook">
            </a>
           <a href="https://www.instagram.com/elcreadorweb/" target="_blank">
                <img src="../assets/icons/instagram.png" alt="instagram"> 
            </a>
            </a>
            <a href="mailto:contacto@elcreadorweb.com" target="_blank">
                <img src="../assets/icons/mail.png" alt="correo electrónico">
            </a>

            <img src="../assets/icons/linkedin.png" alt="linkedin"> 

        </div>


    </section>

    <?php require "about_view.php"; ?>

    <?php require "services_view.php"; ?>

    <!-- <?php require "banner_view.php"; ?> -->

    <?php require "process_view.php"; ?>

    <?php require "calculator_view.php"; ?>

    <?php require "form_view.php"; ?>

    <?php require "footer_view.php"; ?>

    <!-- <script src="../assets/scroll.js"></script> -->
    <script>
        window.onload = function() {
            const spinner = document.getElementById("onload");
            spinner.style.visibility = "hidden"
            spinner.style.opacity = 0
        }
    </script>
</body>

</html>
