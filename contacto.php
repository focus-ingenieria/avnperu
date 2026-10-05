<?php
$paginaCss = 'contacto';
require __DIR__ . '/includes/header.php';
?>

<section class="formulario">

    <div class="form-container">
        <h2>Solicitud de Ayuda Técnica</h2>
        <p>Ponte en contacto con nosotros para cualquier requerimiento o inquietud.</p>

        <form method="POST" action="index.php">

            <?php require __DIR__ . '/includes/formContacto.php';?>

        </form>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php';?>