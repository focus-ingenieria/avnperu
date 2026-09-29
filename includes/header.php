<?php
if (!defined('AVN_WHATSAPP')) {
    define('AVN_WHATSAPP', '945 426 246');          // atención al cliente (se muestra)
    define('AVN_WHATSAPP_LINK', '51945426246');     // para wa.me (con 51, sin espacios)
    define('AVN_VENTAS', '977 592 442');            // línea de ventas (se muestra)
    define('AVN_VENTAS_LINK', '51977592442');       // para tel: y wa.me
    define('AVN_EMAIL', 'ventas@avnperu.pe');
}

$titulo = $titulo ?? 'AVN PERÚ - Internet 100% Fibra Óptica';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($titulo); ?></title>
    <link rel="icon" type="image/png" href="assets/images/icon-avn.png">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/animations.css">
    <link rel="stylesheet" href="assets/css/alert.css">
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="top-bar-content">
            <div id="contact-info">
                Atención al cliente: <strong>WhatsApp: <?php echo AVN_WHATSAPP; ?></strong> |
                AVN PERÚ - Fibra Óptica de Máxima Velocidad
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <div class="logo-section">
                <a href="index.php" class="logo-link">
                    <img src="assets/images/logo_color.png" alt="AVN Perú" class="logo-image">
                </a>

                <!-- Botón hamburguesa: solo se ve en móvil (ver CSS) -->
                <button class="mobile-menu-toggle" type="button" aria-label="Abrir menú" aria-expanded="false">☰</button>

                <nav>
                    <ul class="nav-menu">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="cobertura.php">Cobertura</a></li>
                        <li><a href="soporte.php">Soporte</a></li>
                        <li><a href="empresa.php">Empresa</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>
                </nav>
            </div>
            <div class="sales-contact">
                <div class="sales-label">Línea Exclusiva de Venta</div>
                <div class="sales-phone">
                    <a href="tel:+<?php echo AVN_VENTAS_LINK; ?>"><?php echo AVN_VENTAS; ?></a>
                </div>
            </div>
        </div>
    </header>
    <main>