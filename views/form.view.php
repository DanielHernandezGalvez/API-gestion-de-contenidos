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

    <label for="contact-form">¿Quieres un formulario de contacto?</label>
    <select name="contact-form" id="contact-form" onchange="updateForm()">
        <option value="0">No</option>
        <option value="400">Si</option>
    </select>
    <p>La web incluye botónes de contacto a whatsapp, correo electrónico y más redes sociales</p>
    <p id="total-contactos"></p>

    <label for="dominio">¿Ya tienes un dominio para tu página web?</label>
    <select name="dominio" id="dominio" onchange="updateDominio()">
        <option value="0">Ya tengo un dominio para mi página web</option>
        <option value="0">No tengo, quiero comprarlo yo (recomendado)</option>
        <option value="289">No tengo, quiero un dominio.com anual</option>
        <option value="279">No tengo, quiero un dominio .com.mx anual</option>
        <option value="721">No tengo, quiero un dominio .mx anual</option>
    </select>
    <p>El dominio de tu página web es la dirección con la cual la gente podrá entrar a tu página web.
    </p>
    <p id="total-dominio"></p>

    <label for="host">¿Ya tienes un hospedaje para tu página web?</label>
    <select name="host" id="host" onchange="updateHost()">
        <option value="0">Ya tengo mi hospedaje web</option>
        <option value="0">No tengo, quiero comprarlo yo (recomendado)</option>
        <option value="791">No tengo, quiero un hospedaje anual</option>
    </select>
    <p>El hospedaje web es el lugar donde se guardará tu página web para que se vea en Internet.
    </p>
    <p id="total-host"></p>

    <label for="english">¿Quieres tu página en inglés?</label>
    <select name="english" id="english" onchange="updateEnglish()">
        <option value="0">No</option>
        <option value="3200">Si</option>
    </select>
    <p>La traducción del texto debe ser proporcionada por ti.
    </p>
    <p id="total-english"></p>

    <!-- total -->
    <p id="total-result"> </p>

    <input type="submit" value="Enviar">

</form>

<script src="../js/form.js"></script>