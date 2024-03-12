<section id="contact" class="contact container">

    <div class="contact-title">
        <h5 class="title">Contacto</h5>
        <span class="span-hr"></span>
        <hr class="span-hr ">

    </div>

    <div class="contact-leyend">
        <p>¿Quieres crear tu futuro online?<br> <span>¡Contáctanos hoy mismo!</span></p>
    </div>

    <div class="contact-social">
        <!-- <img src="../assets/icons/whatsapp.png" alt="Whatsapp"> -->
        <a href="mailto:contacto@elcreadorweb.com" target="_blank">
                <img src="../assets/icons/mail.png" alt="correo electrónico">
            </a>
        <a href="https://www.facebook.com/profile.php?id=100094863716753" target="_blank">
            <img src="../assets/icons/facebook.png" alt="facebook">
        </a>
        <a href="https://www.instagram.com/elcreadorweb/" target="_blank"> <img src="../assets/icons/instagram.png" alt="instagram">
        </a>
        <!-- <img src="../assets/icons/linkedin.png" alt="linkedin"> -->
        <a href="https://www.tiktok.com/@elcreadorweb" target="_blank"> <img src="../assets/icons/tiktok.png" alt="tiktok">
        </a>
    </div>

    <form id="last-form" action="../form.php" method="post">

        <div class="form-submit">
            
            <input class="input-form" type="text" name="name-form" placeholder="Nombre" id="name-form" required />

            <input type="email" name="email-form" placeholder="Correo" id="email-form" required />
            
            <textarea name="message-form" id="message-form" placeholder="Mensaje" cols="30" rows="7"></textarea>
            <div class="btn-submit">
                <input class="btn-form" type="submit" value="ENVIAR">
            </div>

        </div>


    </form>
    <div id="success-message-form" style="display: none; color: green;">¡El formulario se ha enviado correctamente!</div>
    <div id="error-message-form" style="display: none; color: red;">Hubo un problema al enviar el formulario. Por favor, inténtalo de nuevo más tarde.</div>

</section>
<script src="../assets/js/form.js"></script>