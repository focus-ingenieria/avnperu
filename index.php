<?php require __DIR__ . '/includes/header.php';?>
<!-- Loading Screen 
    <div class="loading-screen" id="loadingScreen">
        <div class="data-particles" id="particles"></div>
        <div class="glitch-wrapper">
            <h1 class="glitch" data-text="AVN PERÚ">AVN PERÚ</h1>
        </div>
        <p class="loading-subtitle">Fibra Óptica Ultra Rápida</p>
        <div class="speed-indicator">
            Velocidad: <span class="speed-counter" id="speedCounter">0</span> Mbps
        </div>
        <div class="loading-container">
            <div class="loading-percentage" id="loadingPercentage">0%</div>
            <div class="loading-bar">
                <div class="loading-progress"></div>
            </div>
            <div class="loading-text" id="loadingText">Conectando fibra óptica...</div>
        </div>
    </div> -->

 <!-- Hero Section -->
    <section class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title">PROMOCIÓN DIGITAL</h1>
                <h2 class="hero-subtitle">Mantente conectado a un súper precio</h2>

                <div class="promo-card">
                    <div class="promo-speed">
                        <div class="speed-main">
                            <span class="speed-number">1000</span>
                            <span class="speed-unit">Mbps</span>
                        </div>
                        <div class="speed-extra">
                            <span class="channel-number">+</span>
                            <span class="channel-number2">30</span>
                            <div class="tv-info">
                                <span style="font-size: 20px; left: 15px; position: relative;">TV</span>
                                <span>CANALES</span>
                            </div>
                        </div>
                    </div>
                    <div class="promo-details">
                        <div class="promo-price">
                            <span class="price-regular">Precio regular: S/ 129.00</span>
                        </div>
                        <div class="promo-price">                            
                            <span class="price-currency">S/</span>
                            <span class="price-promo">100</span>
                            <span class="price-decimal2">.</span>
                            <span class="price-decimal">00</span>
                        </div>
                        <div class="promo-duration">Pago Puntual x 6 meses</div>
                    </div>
                </div>
                
                <br>
                <a href="contratar.html" class="cta-button">Lo quiero</a>
            </div>

            <div class="form-card">
                <div class="form-header">
                    <h3>¿Éstas interasado(a)? ¡Contactanos!</h3>
                </div>
                
                <div class="form-group">
                    <a href="https://wa.me/51977592442?text=Hola,%20quiero%20información%20sobre%20los%20planes%20de%20Internet"
                           class="whatsapp-contact"
                            target="_blank"
                           rel="noopener noreferrer">
                      <img src="assets/images/whatsapp-icon.png" alt="WhatsApp">
                    </a>

                    <b>Ó</b>

                    <p>
                        Si te decidiste por el plan, consulta nuestra cobertura y 
                        contactanos para agendar la instalación.
                    </p>
                </div>
                    <a href="cobertura.php" class="form-submit">Consulta nuestra cobertura</a>
                
                <div class="form-schedule">
                    <strong>Horario de atención</strong><br>
                    Lunes a Sábado de 7:00 am a 10:00 pm
                </div>
            </div>

            <!-- POPUP DE CONFIRMACIÓN 
            <div id="successModal" class="modal">
                <div class="modal-content">
                    <div class="modal-icon">&#10003;</div>

                    <h2>¡Solicitud recibida!</h2>

                    <p>
                        Gracias por confiar en <strong>AVN Alta Velocidad Network</strong>.<br>
                        Hemos recibido correctamente tu solicitud y uno de nuestros asesores
                        se comunicará contigo en breve.
                    </p>

                    <button id="closeModal" class="modal-btn">
                        Entendido
                    </button>
                </div>
            </div> -->

        </div>
    </section>

    <!-- Plans Section -->
    <section class="plans-section">

        <div class="section-container">
            <h2 class="section-title">Internet AVN para tu Hogar</h2>

            <!-- BOTONERAS / TABS -->
            <div class="tabs-programa">
              <button class="tab-btn active" data-tab="tab-1">Solo Internet</button>
              <button class="tab-btn" data-tab="tab-2">Internet + TV</button>
            </div>

            <div id="tab-1" class="tab-content active">
                <div class="plans-grid">

                    <!-- Solo Internet Plans -->
                    <!-- Plan 1 -->
                    <div class="plan-card">
                        <div class="plan-header blue wave-header">
                            <div class="plan-type">Internet Fibra</div>
                            <div class="plan-speed" data-speed="800">
                                500 <span>
                                    Mbps
                                    <small>de velocidad</small>
                                </span>
                            </div>
                        </div>
                        <div class="plan-body">
                            <!-- <p class="plan-description">TV (30 canales)</p> -->
                            <div class="plan-price">
                                <div class="price-main">S/ 50.00 <small>x mes</small></div>
                                <div class="price-detail">Precio con pago puntual</div>
                            </div>
                            <hr>
                            <div class="description">
                                <p>
                                    <img decoding="async" src="assets/images/fibra.jpg" with="25" height="24" alt="Fibra Óptica">
                                    Internet Fibra Óptica 500 Mbps
                                </p>
                                <p>
                                    <img decoding="async" src="assets/images/instalacion.png" with="25" height="24" alt="Instalación">
                                    Instalación <b>Gratis</b>
                                </p>
                            </div>
                            <a href="contratar.html?plan=400" class="plan-button">Lo quiero</a>
                        </div>
                    </div>

                    <!-- Plan 2 -->
                    <div class="plan-card">
                        <div class="plan-header blue wave-header">
                            <div class="plan-type">Internet Fibra</div>
                            <div class="plan-speed" data-speed="800">
                                800 <span>
                                    Mbps
                                    <small>de velocidad</small>
                                </span>
                            </div>
                        </div>
                        <div class="plan-body">
                            <!-- <p class="plan-description">TV (30 canales)</p> -->
                            <div class="plan-price">
                                <div class="price-main">S/ 80.00 <small>x mes</small></div>
                                <div class="price-detail">Precio con pago puntual</div>
                            </div>
                            <hr>
                            <div class="description">
                                <p>
                                    <img decoding="async" src="assets/images/fibra.jpg" with="25" height="24" alt="Fibra Óptica">
                                    Internet Fibra Óptica 800 Mbps
                                </p>
                                <p>
                                    <img decoding="async" src="assets/images/instalacion.png" with="25" height="24" alt="Instalación">
                                    Instalación <b>Gratis</b>
                                </p>
                            </div>
                            <a href="contratar.html?plan=1000" class="plan-button">Lo quiero</a>
                        </div>
                    </div>

                    <!-- Plan 3 -->
                    <div class="plan-card">
                        <div class="plan-header orange wave-header">
                            <div class="plan-type">Internet Fibra</div>
                            <div class="plan-speed" data-speed="800">
                                1000 <span>
                                    Mbps
                                    <small>de velocidad</small>
                                </span>
                            </div>
                        </div>
                        <div class="plan-body">
                            <!-- <p class="plan-description">TV (+1 canales) + L1MAX</p> -->
                            <div class="plan-price">
                                <div class="price-main">S/ 100.00 <small>x mes</small></div>
                                <div class="price-detail">Precio con pago puntual</div>
                            </div>
                            <hr>
                            <div class="description">
                                <p>
                                    <img decoding="async" src="assets/images/fibra.jpg" with="25" height="24" alt="Fibra Óptica">
                                    Internet Fibra Óptica 1000 Mbps
                                </p>
                                <p>
                                    <img decoding="async" src="assets/images/instalacion.png" with="25" height="24" alt="Instalación">
                                    Instalación <b>Gratis</b>
                                </p>
                            </div>
                            <a href="contratar.html?plan=1000-l1max" class="plan-button">Lo quiero</a>
                        </div>
                    </div>

                    <!-- Plan 4 
                    <div class="plan-card">
                        <div class="plan-header orange">
                            <div class="plan-type">TV L1MAX</div>
                            <div class="plan-speed">1000Mbps</div>
                        </div>
                        <div class="plan-body">
                            <p class="plan-description">TV (30 canales) + L1MAX</p>
                            <div class="plan-price">
                                <div class="price-main">S/ 124.90</div>
                                <div class="price-detail">Precio con pago puntual</div>
                            </div>
                            <a href="contratar.html?plan=1000-l1max-plus" class="plan-button">Lo quiero</a>
                        </div>
                    </div>-->

                    <!-- Featured Plan 
                    <div class="featured-plan">
                        <h3>Hasta 120Mbps hasta</h3>
                        <div class="featured-price">1000Mbps</div>
                        <p>TV (30+ canales) + L1MAX</p>
                        <div style="margin-top: 1rem;">
                            <span style="text-decoration: line-through;">Desde S/128.90</span>
                            <div class="featured-price">S/ 128.90</div>
                            <p style="font-size: 0.875rem;">Precio con pago puntual</p>
                        </div>
                        <a href="contratar.html?plan=featured" class="plan-button" style="margin-top: 1.5rem;">Lo quiero</a>
                    </div>-->
                </div>
            </div>

            <!--<p style="text-align: center; margin-top: 2rem; color: var(--gray); font-size: 0.875rem;">
                Términos y condiciones
            </p>-->

            <div id="tab-2" class="tab-content">
                <div class="plans-grid">

                    <!-- Internet + TV Plans -->
                    <!-- Plan 4 -->
                    <div class="plan-card">
                        <div class="plan-header blue wave-header">
                            <div class="plan-type">Internet Fibra + TV</div>
                            <div class="plan-speed">
                                500 <span>
                                    Mbps
                                    <small>de velocidad</small>
                                </span>
                            </div>
                        </div>
                        <div class="plan-body">
                            <!-- <p class="plan-description">TV (30 canales)</p> -->
                            <div class="plan-price">
                                <div class="price-main">S/ 60.00 <small>x mes</small></div>
                                <div class="price-detail">Precio con pago puntual</div>
                            </div>
                            <hr>
                            <div class="description">
                                <p>
                                    <img decoding="async" src="assets/images/fibra.jpg" with="25" height="24" alt="Fibra Óptica">
                                    Internet Fibra Óptica 500 Mbps
                                </p>
                                <p>
                                    <img decoding="async" src="assets/images/television.jpg" with="25" height="24" alt="Televisión">
                                    TV con +30 canales
                                </p>
                                <p>
                                    <img decoding="async" src="assets/images/instalacion.png" with="25" height="24" alt="Instalación">
                                    Instalación <b>Gratis</b>
                                </p>
                            </div>
                            <a href="contratar.html?plan=400" class="plan-button">Lo quiero</a>
                        </div>
                    </div>

                    <!-- Plan 5 -->
                    <div class="plan-card">
                        <div class="plan-header blue wave-header">
                            <div class="plan-type">Internet Fibra + TV</div>
                            <div class="plan-speed">
                                800 <span>
                                    Mbps
                                    <small>de velocidad</small>
                                </span>
                            </div>
                        </div>
                        <div class="plan-body">
                            <!-- <p class="plan-description">TV (30 canales)</p> -->
                            <div class="plan-price">
                                <div class="price-main">S/ 90.00 <small>x mes</small></div>
                                <div class="price-detail">Precio con pago puntual</div>
                            </div>
                            <hr>
                            <div class="description">
                                <p>
                                    <img decoding="async" src="assets/images/fibra.jpg" with="25" height="24" alt="Fibra Óptica">
                                    Internet Fibra Óptica 800 Mbps
                                </p>
                                <p>
                                    <img decoding="async" src="assets/images/television.jpg" with="25" height="24" alt="Televisión">
                                    TV con +30 canales
                                </p>
                                <p>
                                    <img decoding="async" src="assets/images/instalacion.png" with="25" height="24" alt="Instalación">
                                    Instalación <b>Gratis</b>
                                </p>
                            </div>
                            <a href="contratar.html?plan=1000" class="plan-button">Lo quiero</a>
                        </div>
                    </div>

                    <!-- Plan 6 -->
                    <div class="plan-card">
                        <div class="plan-header orange wave-header">
                            <div class="plan-type">Internet Fibra + TV</div>
                            <div class="plan-speed">
                                1000 <span>
                                    Mbps
                                    <small>de velocidad</small>
                                </span>
                            </div>
                        </div>
                        <div class="plan-body">
                            <!-- <p class="plan-description">TV (+1 canales) + L1MAX</p> -->
                            <div class="plan-price">
                                <div class="price-main">S/ 100.00 <small>x mes</small></div>
                                <div class="price-detail">Precio con pago puntual</div>
                            </div>
                            <hr>
                            <div class="description">
                                <p>
                                    <img decoding="async" src="assets/images/fibra.jpg" with="25" height="24" alt="Fibra Óptica">
                                    Internet Fibra Óptica 1000 Mbps
                                </p>
                                <p>
                                    <img decoding="async" src="assets/images/television.jpg" with="25" height="24" alt="Televisión">
                                    TV con +30 canales
                                </p>
                                <p>
                                    <img decoding="async" src="assets/images/instalacion.png" with="25" height="24" alt="Instalación">
                                    Instalación <b>Gratis</b>
                                </p>
                            </div>
                            <a href="contratar.html?plan=1000-l1max" class="plan-button">Lo quiero</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>

    <!-- Benefits Section -->
    <section class="benefits-section">
        <div class="section-container">
            <h2 class="section-title" style="color: #FF6B35;">¿Por qué contratar <b>Internet AVN</b>?</h2>

            <div class="benefits-grid">
                <div class="benefit-item">
                    <div class="benefit-icon">📶</div>
                    <h3>Internet de Alta Velocidad</h3>
                    <p>Navega, descarga y juega sin interrupciones con nuestras rápidas velocidades de Internet.</p>
                </div>

                <div class="benefit-item">
                    <div class="benefit-icon">📺</div>
                    <h3>Variedad de Canales</h3>
                    <p>Disfruta de una extensa selección de canales de TV incluyendo los más populares y especializados.
                    </p>
                </div>

                <div class="benefit-item">
                    <div class="benefit-icon">💰</div>
                    <h3>Ahorro y Comodidad</h3>
                    <p>Combina tus servicios y ahorra dinero mientras disfrutas de la comodidad de tener todo en un solo
                        paquete.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="faq-container">
            <h2 class="section-title">Preguntas Frecuentes AVN</h2>

            <div class="faq-item">
                <div class="faq-question">
                    <span>¿Qué incluye el cable AVN y el Internet AVN?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Nuestros planes incluyen internet de alta velocidad con fibra óptica, televisión con múltiples
                        canales HD,
                        router WiFi de última generación y soporte técnico 24/7.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>¿Cuáles son los precios del Internet AVN y qué factores influyen en ellos?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Los precios varían según la velocidad contratada, desde S/59.90 hasta S/149.90.
                        Los factores incluyen velocidad, canales de TV incluidos y servicios adicionales.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>¿Qué planes de Internet AVN están disponibles actualmente?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Ofrecemos planes desde 100 Mbps hasta 1000 Mbps, con opciones de solo internet
                        o combos con TV y telefonía fija.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>¿Cómo puedo contratar un plan de Internet AVN?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Puedes contratar llamando al (01) 7064247, por WhatsApp o llenando el formulario
                        en nuestra página web. La instalación es gratuita y rápida.</p>
                </div>
            </div>
        </div>
    </section>

    

<?php require 'includes/footer.php';?>