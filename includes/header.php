<?php

if (!defined('AVN_WHATSAPP')) {
    define('AVN_WHATSAPP', '945 426 246');
    define('AVN_WHATSAPP_LINK', '51945426246');
    define('AVN_VENTAS', '977 592 442');
    define('AVN_VENTAS_LINK', '51977592442');
    define('AVN_EMAIL', 'ventas@avnperu.pe');
}

$titulo       = $titulo ?? 'AVN PERÚ - Internet 100% Fibra Óptica';
$paginaActual = $paginaActual ?? '';

// Menú definido una sola vez: clave => [texto, archivo]
$menu = [
    'planes'    => ['Inicio',    'index.php'],
    'cobertura' => ['Cobertura', 'cobertura.php'],
    'soporte'   => ['Soporte',   'soporte.php'],
    'empresa'   => ['Empresa',   'empresa.php'],
    'contacto'  => ['Contacto',  'contacto.php'],
];
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
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/animations.css">
    <link rel="stylesheet" href="assets/css/alert.css">
</head>
<body>

    <!-- Barra superior -->
    <div class="topbar">
        <div class="topbar__inner">
            <a class="topbar__whatsapp" href="https://wa.me/<?php echo AVN_WHATSAPP_LINK; ?>" target="_blank" rel="noopener">
                <svg viewBox="0 0 24 24" width="16" height="16" aria-hidden="true"><path fill="currentColor" d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2Zm0 18.2a8.2 8.2 0 0 1-4.2-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2Zm4.5-6.1c-.2-.1-1.5-.7-1.7-.8s-.4-.1-.6.1-.6.8-.8 1-.3.2-.5.1a6.7 6.7 0 0 1-3.3-2.9c-.3-.4.3-.4.7-1.3.1-.2 0-.3 0-.4l-.8-1.8c-.2-.5-.4-.4-.6-.4h-.5a1 1 0 0 0-.7.3 3 3 0 0 0-.9 2.2 5.2 5.2 0 0 0 1.1 2.8 12 12 0 0 0 4.6 4c1.7.7 2.4.8 3.2.7a2.7 2.7 0 0 0 1.8-1.3 2.2 2.2 0 0 0 .2-1.3c-.1-.1-.3-.2-.5-.3Z"/></svg>
                <span>Atención al cliente: <strong><?php echo AVN_WHATSAPP; ?></strong></span>
            </a>
            <span class="topbar__slogan">Fibra óptica de máxima velocidad</span>
        </div>
    </div>

    <!-- Header principal -->
    <header class="site-header" id="siteHeader">
        <div class="site-header__inner">

            <a href="index.php" class="site-header__logo">
                <img src="assets/images/logo_color.png" alt="AVN Perú">
            </a>

            <nav class="site-nav" id="siteNav" aria-label="Menú principal">
                <ul class="site-nav__list">
                    <?php foreach ($menu as $clave => [$texto, $archivo]): ?>
                        <li>
                            <a href="<?php echo $archivo; ?>"
                               class="site-nav__link<?php echo $clave === $paginaActual ? ' is-active' : ''; ?>">
                                <?php echo $texto; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <!-- CTA dentro del nav: en móvil aparece dentro del menú desplegable -->
                <a href="tel:+<?php echo AVN_VENTAS_LINK; ?>" class="site-header__cta">
                    <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><path fill="currentColor" d="M6.6 10.8a15.1 15.1 0 0 0 6.6 6.6l2.2-2.2a1 1 0 0 1 1-.25 11.4 11.4 0 0 0 3.6.6 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1 11.4 11.4 0 0 0 .6 3.6 1 1 0 0 1-.25 1L6.6 10.8Z"/></svg>
                    <span>Contrata: <?php echo AVN_VENTAS; ?></span>
                </a>
            </nav>

            <button class="site-header__toggle" id="menuToggle" type="button"
                    aria-label="Abrir menú" aria-expanded="false" aria-controls="siteNav">
                <span></span><span></span><span></span>
            </button>

        </div>
    </header>
    <main>