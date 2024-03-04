<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/styles.css">
    <link rel="shortcut icon" href="../assets/FAVICON.png" type="image/x-icon">
</head>

<body class="">
    <header>
        <nav class="navigation">
            <img src="../assets/img/LOGO.svg" alt="logo del creador web">
            <div class="hamburger-slim">

            </div>
        </nav>
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

    <?php require "services_view.php" ?>

    <?php require "process_view.php" ?>

    <?php require "calculator_view.php"; ?>
</body>

</html>