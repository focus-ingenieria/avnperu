<?php
$paginaCss = 'cobertura';
require __DIR__ . '/includes/header.php';
?>

<section>
    <div class="card-cobertura">
        <h3>¿Qué es la Cobertura?</h3>

        <div class="content-cobertura">
            <p>
                La cobertura de internet es el área donde un proveedor puede ofrecer su servicio de conexión.
                 Esta depende de la red instalada en cada zona y determina si una vivienda, negocio o empresa 
                 puede acceder al servicio. Al consultar tu cobertura, podrás conocer si el internet está disponible 
                 en tu dirección y qué opciones de conexión pueden brindarte.
            </p>

            <div class="box-cobertura">
                <img src="assets/images/cobertura_img.png" alt="Cobertura">
            </div>

        </div>
    </div>

    <iframe class="coverage-map"
            src="https://fiberapu.com/widget/coverage?key=ffk_TGtTKRDr9SEeI8viC1VQTKlEFXJkFrJzD8PU93HO&color=%232563eb&height=320"
            title="Mapa de cobertura de AVN Perú: consulta si hay servicio en tu dirección"
            loading="lazy"></iframe>
</section>

<?php require __DIR__ . '/includes/footer.php';?>