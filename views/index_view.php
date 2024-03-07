<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Página web pagina web barata pagina web precio">
    <meta name="description" content="Desarrollo y diseño de paginas web guadalajara gdl">
    <title>El Creador Web</title>
    <link rel="stylesheet" href="./assets/styles.css">
    <link rel="shortcut icon" href="../assets/FAVICON.png" type="image/x-icon">
</head>

<body class="">
    <header>
        <div class="nav">
            <input type="checkbox" id="nav-check">
            <div class="nav-header">
                <a class="nav-title">
                    <img height="40px" src="../assets//img/LOGO.svg" alt="">
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
            <p>Desarrollo y Diseño web Freelance</p>
            <h1>Creador Web</h1>
            <button>COTIZAR</button>
        </div>


        <div class="social-media">

            <img src="../assets/icons/facebook.png" alt="facebook">
            <img src="../assets/icons/instagram.png" alt="instagram">
            <img src="../assets/icons/linkedin.png" alt="linkedin">

        </div>


    </section>

    <?php require "about_view.php"; ?>

    <?php require "services_view.php"; ?>

    <!-- <?php require "banner_view.php"; ?> -->

    <?php require "process_view.php"; ?>

    <?php require "calculator_view.php"; ?>

    <?php require "form_view.php"; ?>

    <!-- <script src="../assets/scroll.js"></script> -->
</body>

</html>