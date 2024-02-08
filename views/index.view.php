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
            <option value="1800">1800</option>
            <option value="2300">2300</option>
            <option value="2800">2800</option>
            <option value="3300">3300</option>
        </select>
        <p id="sections-result"></p>

        <input type="submit" value="Enviar">

    </form>

    <script src="../js/form.js"></script>
</body>

</html>