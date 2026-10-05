    
    <?php require 'includes/whatsapp.php';?>
    </main>     
        <!-- Footer CTA -->
    <section class="footer-cta">
        <div class="section-container">
            <div class="cta-content">
                <h2>¡Sólo tu número y te contactaremos!</h2>
                <div class="cta-buttons">
                    <a href="contratar.html" class="btn-secondary">Contratar</a>
                    <a href="https://wa.me/<?php echo AVN_WHATSAPP_LINK; ?>" class="btn-secondary">WhatsApp</a>
                    <a href="tel:<?php echo AVN_VENTAS_LINK; ?>" class="cta-button">Llamar Ahora</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-grid">
                <div class="footer-section">
                    <h4>Servicios</h4>
                    <ul>
                        <li><a href="index.php">Planes Internet</a></li>
                        <li><a href="empresa.html">Internet Empresarial</a></li>
                        <li><a href="cobertura.php">Cobertura</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Soporte</h4>
                    <ul>
                        <li><a href="soporte.html">Centro de Ayuda</a></li>
                        <li><a href="contacto.html">Contacto</a></li>
                        <li><a href="#">Preguntas Frecuentes</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Empresa</h4>
                    <ul>
                        <li><a href="empresa.html">Nosotros</a></li>
                        <li><a href="#">Términos y Condiciones</a></li>
                        <li><a href="#">Política de Privacidad</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contáctanos</h4>
                    <p>📞 <?php echo AVN_VENTAS_LINK; ?></p>
                    <p>📱 <?php echo AVN_WHATSAPP; ?></p>
                    <p>✉️ <?php echo AVN_EMAIL; ?></p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 AVN Perú. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="assets/js/loading.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/animations.js"></script>
    <script src="assets/js/form-validator.js"></script>
    <script src="assets/js/speed-widget.js"></script>
    <script src="assets/js/header.js"></script>
    <script src="assets/js/contador.js"></script>
</body>
</html>