<?php
$paginaCss = 'contacto';
require __DIR__ . '/includes/header.php';
?>

<section class="contact">
    <div class="contact-card">
        <h1 class="section-title">Contáctanos</h1>
        <p class="contact-lead">Escríbenos por WhatsApp y te atendemos al instante.</p>

        <a href="<?php echo avn_whatsapp_url('Hola, quiero hacer una consulta', AVN_WHATSAPP_LINK); ?>"
           class="contact-whatsapp" target="_blank" rel="noopener">
            <svg viewBox="0 0 24 24" width="26" height="26" aria-hidden="true"><path fill="currentColor" d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2Zm0 18.2a8.2 8.2 0 0 1-4.2-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2Zm4.5-6.1c-.2-.1-1.5-.7-1.7-.8s-.4-.1-.6.1-.6.8-.8 1-.3.2-.5.1a6.7 6.7 0 0 1-3.3-2.9c-.3-.4.3-.4.7-1.3.1-.2 0-.3 0-.4l-.8-1.8c-.2-.5-.4-.4-.6-.4h-.5a1 1 0 0 0-.7.3 3 3 0 0 0-.9 2.2 5.2 5.2 0 0 0 1.1 2.8 12 12 0 0 0 4.6 4c1.7.7 2.4.8 3.2.7a2.7 2.7 0 0 0 1.8-1.3 2.2 2.2 0 0 0 .2-1.3c-.1-.1-.3-.2-.5-.3Z"/></svg>
            <span>Escríbenos por WhatsApp</span>
        </a>

        <ul class="contact-list">
            <li>
                <span class="contact-list__label">Atención al cliente</span>
                <a href="https://wa.me/<?php echo AVN_WHATSAPP_LINK; ?>" target="_blank" rel="noopener"><?php echo AVN_WHATSAPP; ?></a>
            </li>
            <li>
                <span class="contact-list__label">Ventas</span>
                <a href="tel:+<?php echo AVN_VENTAS_LINK; ?>"><?php echo AVN_VENTAS; ?></a>
            </li>
            <li>
                <span class="contact-list__label">Correo</span>
                <a href="mailto:<?php echo AVN_EMAIL; ?>"><?php echo AVN_EMAIL; ?></a>
            </li>
        </ul>

        <p class="contact-schedule">
            <strong>Horario de atención</strong><br>
            Lunes a Sábado de 7:00 am a 10:00 pm
        </p>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php';?>
