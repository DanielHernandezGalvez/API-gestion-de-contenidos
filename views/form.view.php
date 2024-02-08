<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>

<body>
    <form action="/form.php" method="post">

        <label for="sections">Cantidad de secciones</label>
        <select name="sections" id="sections" onchange="updateSectionsResult()">
            <option value="1800">4</option>
            <option value="2300">5</option>
            <option value="2800">6</option>
            <option value="3300">7</option>
        </select>
        <p>Por ejemplo: Inicio, Quiénes somos, Servicio 1, Servicio 2, Contacto, etc.
        </p>
        <p id="sections-result"></p>

        <label for="sections">Cantidad de imágenes</label>
        <select name="images" id="images" onchange="updatedImagesResult()">
            <option value="0">0-20</option>
            <option value="200">21-30</option>
            <option value="300">31-40</option>
            <option value="400">41-50</option>
        </select>
        <p>Imágenes de tu negocio, productos o servicios.
        </p>
        <p id="images-result"></p>

        <label for="wordpress">¿Quieres actualizar el contenido por tu cuenta?</label>
        <select name="wordpress" id="wordpress" onchange="updatedWordpress()">
            <option value="0">No</option>
            <option value="800">Si</option>
        </select>
        <p>Se instala Wordpress.org y recibes una guía gratuita para que edites tu contenido.
        </p>

        <p id="wordpress-result"></p>

        <!-- total -->
        <p id="total-result"> </p>

        <input type="submit" value="Enviar">

    </form>

    <script src="../js/form.js"></script>
</body>

</html>