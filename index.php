<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katarsys - Consultorio Psicológico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="https://static.elfsight.com/platform/platform.js" async defer></script>
</head>
<body>
    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#inicio">
                <img src="https://imgur.com/yMlu81k.png" alt="logo katarsys" width="160">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#paquetes">Paquetes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonios">Testimonios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ms-2" href="login.php">Acceder</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Slider -->
    <section id="inicio" class="hero-section">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            </div>
            
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="hero-slide hero-slide-1">
                        <div class="hero-overlay"></div>
                        <div class="container">
                            <div class="row align-items-center min-vh-100">
                                <div class="col-lg-6">
                                    <div class="hero-content text-white">
                                        <h1 class="display-4 fw-bold mb-4">
                                            Tu Bienestar Mental es Nuestra Prioridad
                                        </h1>
                                        <p class="lead mb-4">
                                            Nuestro compromiso es ofrecerte un espacio seguro y confidencial, donde puedas expresar tus emociones, fortalecer tu resiliencia y alcanzar un equilibrio integral en tu día a día.
                                        </p>
                                        <div class="hero-buttons">
                                            <a href="https://wa.me/51991846646?text=Hola,%20me%20interesa%20una%20consulta%20psicológica" class="btn btn-primary btn-lg me-3 whatsapp-btn" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp me-2"></i>Consulta</a>
                                            <a href="#servicios" class="btn btn-outline-light btn-lg">
                                                Conocer Más
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <div class="hero-slide hero-slide-2">
                        <div class="hero-overlay"></div>
                        <div class="container">
                            <div class="row align-items-center min-vh-100">
                                <div class="col-lg-6">
                                    <div class="hero-content text-white">
                                        <h1 class="display-4 fw-bold mb-4">
                                            Terapia para niño y adolescente
                                        </h1>
                                        <p class="lead mb-4">
                                            Porque cada etapa de la vida es única, ofrecemos terapia adaptada a las necesidades de niños y adolescentes, apoyando su autoestima, comunicación y relaciones familiares.
                                        </p>
                                        <div class="hero-buttons">
                                            <a href="https://wa.me/51991846646?text=Hola,%20me%20interesa%20una%20consulta%20psicológica" class="btn btn-primary btn-lg me-3 whatsapp-btn" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp me-2"></i>Terapia</a>
                                            <a href="#paquetes" class="btn btn-outline-light btn-lg">
                                                Ver Paquetes
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <div class="hero-slide hero-slide-3">
                        <div class="hero-overlay"></div>
                        <div class="container">
                            <div class="row align-items-center min-vh-100">
                                <div class="col-lg-6">
                                    <div class="hero-content text-white">
                                        <h1 class="display-4 fw-bold mb-4">
                                            Brindamos Servicio de Selección de Personal
                                        </h1>
                                        <p class="lead mb-4">
                                            Brindamos Servicio de Selección de Personal especializado, porque sabemos que contar con el candidato ideal es la clave para el crecimiento sostenible de tu negocio.
                                        </p>
                                        <div class="hero-buttons">
                                            <a href="https://wa.me/51991846646?text=Hola,%20me%20interesa%20una%20consulta%20psicológica" class="btn btn-primary btn-lg me-3 whatsapp-btn" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp me-2"></i>Consulta</a>
                                            <a href="#testimonios" class="btn btn-outline-light btn-lg">
                                                Ver Testimonios
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <!-- Servicios -->
    <section id="servicios" class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold text-primary mb-3">Nuestros Servicios</h2>
                    <p class="lead text-muted">
                        Ofrecemos una amplia gama de servicios psicológicos para atender todas tus necesidades de salud mental.
                    </p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-user-friends"></i>
                        </div>
                            <h4>Terapia Individual</h4>
                            <p>Espacio para comprender emociones y fortalecer tu bienestar.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Manejo del estrés y la ansiedad</li>
                                <li><i class="fas fa-check text-success me-2"></i>Apoyo en procesos de duelo</li>
                                <li><i class="fas fa-check text-success me-2"></i>Mejora de la autoestima</li>
                                <li><i class="fas fa-check text-success me-2"></i>Desarrollo de habilidades personales</li>
                            </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                            <h4>Terapia de Pareja</h4>
                            <p>Mejora la comunicación y fortalece el vínculo en tu relación.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Dificultades en la comunicación</li>
                                <li><i class="fas fa-check text-success me-2"></i>Problemas de confianza y celos</li>
                                <li><i class="fas fa-check text-success me-2"></i>Estrés familiar y económico</li>
                                <li><i class="fas fa-check text-success me-2"></i>Conflictos por crianza de los hijos</li>
                                <li><i class="fas fa-check text-success me-2"></i>Desgaste emocional en la relación</li>
                            </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-users"></i>
                        </div>
                            <h4>Terapia Familiar</h4>
                            <p>Apoyo para sanar vínculos y mejorar la convivencia familiar.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Problemas de comunicación entre padres e hijos</li>
                                <li><i class="fas fa-check text-success me-2"></i>Conflictos frecuentes en la convivencia</li>
                                <li><i class="fas fa-check text-success me-2"></i>Dificultades en la crianza y disciplina</li>
                                <li><i class="fas fa-check text-success me-2"></i>Impacto del divorcio o separación</li>
                                <li><i class="fas fa-check text-success me-2"></i>Estrés por problemas económicos o sociales</li>
                            </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                            <h4>Orientación Vocacional</h4>
                            <p>Te guiamos a elegir tu futuro académico y profesional.</p>
                            <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Evaluaciones de intereses y aptitudes</li>
                            <li><i class="fas fa-check text-success me-2"></i>Exploración de carreras y mercado laboral</li>
                            <li><i class="fas fa-check text-success me-2"></i>Plan de acción académico y profesional</li>
                            <li><i class="fas fa-check text-success me-2"></i>Desarrollo de habilidades de decisión</li>
                            <li><i class="fas fa-check text-success me-2"></i>Acompañamiento a familia y estudiante</li>
                            </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-child"></i>
                        </div>
                            <h4>Terapia Infantil</h4>
                            <p>Atención a niños y adolescentes en su desarrollo emocional.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Dificultades de aprendizaje y concentración</li>
                                <li><i class="fas fa-check text-success me-2"></i>Problemas de conducta en el hogar o colegio</li>
                                <li><i class="fas fa-check text-success me-2"></i>Ansiedad, miedos y fobias</li>
                                <li><i class="fas fa-check text-success me-2"></i>Bullying y baja autoestima</li>
                                <li><i class="fas fa-check text-success me-2"></i>Dificultades en habilidades sociales</li>
                            </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-laptop"></i>
                        </div>
                            <h4>Selección de Personal</h4>
                            <p>Elegimos candidatos ideales con procesos confiables y eficientes</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Reclutamiento especializado</li>
                                <li><i class="fas fa-check text-success me-2"></i>Evaluación de competencias</li>
                                <li><i class="fas fa-check text-success me-2"></i>Entrevistas psicológicas</li>
                                <li><i class="fas fa-check text-success me-2"></i>Informe con recomendaciones</li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Paquetes -->
    <section id="paquetes" class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold text-primary mb-3">Paquetes de Terapia</h2>
                    <p class="lead text-muted">
                        Elige el paquete que mejor se adapte a tus necesidades y presupuesto.
                    </p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card h-100 pricing-featured">
                         <div class="pricing-badge">Más Popular</div>
                        <div class="pricing-header">
                            <h4>Individual</h4>
                            <div class="price">
                                <span class="currency">S/</span>
                                <span class="amount">800</span>
                                <span class="period"></span>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>10 sesiones</li>
                                <li><i class="fas fa-check text-success me-2"></i>Sesiones de 50 minutos</li>
                                <li><i class="fas fa-check text-success me-2"></i>Modalidad presencial u online</li>
                                <li><i class="fas fa-check text-success me-2"></i>Material psicologico</li>
                                <li><i class="fas fa-check text-success me-2"></i>Apoyo vía WhatsApp</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="https://wa.me/51991846646?text=Hola,%20me%20interesa%20el%20paquete%20Individual" 
                               class="btn btn-outline-primary w-100 whatsapp-btn" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-whatsapp me-2"></i>
                                Solicitar Información
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card h-100">
                        <div class="pricing-header">
                            <h4>Pareja</h4>
                            <div class="price">
                                <span class="currency">S/</span>
                                <span class="amount">1800</span>
                                <span class="period"></span>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>10 sesiones</li>
                                <li><i class="fas fa-check text-success me-2"></i>Sesiones de 50 minutos</li>
                                <li><i class="fas fa-check text-success me-2"></i>Modalidad presencial u online</li>
                                <li><i class="fas fa-check text-success me-2"></i>Material psicologico</li>
                                <li><i class="fas fa-check text-success me-2"></i>Apoyo vía WhatsApp 24/7</li>                               
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="https://wa.me/51991846646?text=Hola,%20me%20interesa%20el%20paquete%20Pareja" 
                               class="btn btn-outline-primary w-100 whatsapp-btn" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-whatsapp me-2"></i>
                                Solicitar Información
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card h-100">
                        <div class="pricing-header">
                            <h4>Familiar</h4>
                            <div class="price">
                                <span class="currency">S/</span>
                                <span class="amount">2400</span>
                                <span class="period"></span>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>10 sesiones</li>
                                <li><i class="fas fa-check text-success me-2"></i>Sesiones de 50 minutos</li>
                                <li><i class="fas fa-check text-success me-2"></i>Modalidad presencial u online</li>
                                <li><i class="fas fa-check text-success me-2"></i>Material psicologico</li>
                                <li><i class="fas fa-check text-success me-2"></i>Apoyo vía WhatsApp 24/7</li>    
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="https://wa.me/51991846646?text=Hola,%20me%20interesa%20el%20paquete%20Familiar" 
                               class="btn btn-outline-primary w-100 whatsapp-btn" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-whatsapp me-2"></i>
                                Solicitar Información
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonios -->
    <section id="testimonios" class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold text-primary mb-3">Lo Que Dicen Nuestros Clientes</h2>
                    <p class="lead text-muted">
                        Testimonios reales de personas que han transformado sus vidas con nuestra ayuda.
                    </p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row g-4">
                                    <div class="col-lg-4">
                                        <div class="testimonial-card">
                                            <div class="testimonial-content">
                                                <div class="stars mb-3">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <p>"La terapia me ayudó a superar mis miedos y a encontrar la confianza que necesitaba. La Dra. María es excepcional y siempre me hizo sentir comprendida."</p>
                                                <div class="testimonial-author">
                                                    <h6>Ana García</h6>
                                                    <small class="text-muted">Cliente - Terapia Individual</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <div class="testimonial-card">
                                            <div class="testimonial-content">
                                                <div class="stars mb-3">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <p>"Mi esposa y yo estábamos pasando por una crisis. La terapia de pareja nos ayudó a comunicarnos mejor y fortalecer nuestra relación."</p>
                                                <div class="testimonial-author">
                                                    <h6>Carlos Rodríguez</h6>
                                                    <small class="text-muted">Cliente - Terapia de Pareja</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <div class="testimonial-card">
                                            <div class="testimonial-content">
                                                <div class="stars mb-3">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <p>"La flexibilidad de poder tener sesiones online me permitió mantener mi tratamiento incluso con mi agenda ocupada. Excelente servicio."</p>
                                                <div class="testimonial-author">
                                                    <h6>María López</h6>
                                                    <small class="text-muted">Cliente - Terapia Online</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="carousel-item">
                                <div class="row g-4">
                                    <div class="col-lg-4">
                                        <div class="testimonial-card">
                                            <div class="testimonial-content">
                                                <div class="stars mb-3">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <p>"Mi hijo tenía problemas de conducta en el colegio. La psicóloga infantil trabajó maravillosamente con él y ahora es un niño más seguro y feliz."</p>
                                                <div class="testimonial-author">
                                                    <h6>Patricia Mendoza</h6>
                                                    <small class="text-muted">Madre - Psicología Infantil</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <div class="testimonial-card">
                                            <div class="testimonial-content">
                                                <div class="stars mb-3">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <p>"Sufría de ataques de ansiedad que me impedían vivir normalmente. Gracias a la terapia cognitivo-conductual, ahora manejo mucho mejor mis emociones."</p>
                                                <div class="testimonial-author">
                                                    <h6>Jorge Vásquez</h6>
                                                    <small class="text-muted">Cliente - TCC</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <div class="testimonial-card">
                                            <div class="testimonial-content">
                                                <div class="stars mb-3">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <p>"El paquete premium fue la mejor inversión que hice en mi salud mental. El seguimiento personalizado y el apoyo constante marcaron la diferencia."</p>
                                                <div class="testimonial-author">
                                                    <h6>Lucía Martínez</h6>
                                                    <small class="text-muted">Cliente - Paquete Premium</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <section id="contacto" class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold text-primary mb-3">¿Listo para Comenzar?</h2>
                    <p class="lead text-muted">
                        Da el primer paso hacia tu bienestar mental. Contáctanos hoy mismo.
                    </p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-8 mx-auto">
                    <div class="contact-card">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="contact-info">
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <i class="fab fa-whatsapp"></i>
                                        </div>
                                        <div class="contact-details">
                                            <h5>WhatsApp</h5>
                                            <p>+51 991 846 646</p>
                                        </div>
                                    </div>
                                    
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="contact-details">
                                            <h5>Email</h5>
                                            <p>katarsys.ps@gmail.com</p>
                                        </div>
                                    </div>
                                    
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                        <div class="contact-details">
                                            <h5>Horarios</h5>
                                            <p>Lun - Vie: 9:00 AM - 8:00 PM<br>
                                               Sáb: 9:00 AM - 2:00 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="cta-section">
                                    <h4 class="mb-4">Inicia Tu Proceso de Cambio</h4>
                                    <p class="mb-4">
                                        Estoy lista para acompañarte en tu camino hacia el bienestar mental.
                                    </p>
                                    
                                    <div class="cta-buttons">
                                        <a href="https://wa.me/51991846646?text=Hola,%20me%20interesa%20una%20consulta%20psicológica" class="btn btn-primary btn-lg me-3 whatsapp-btn" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp me-2"></i>Agendar Consulta</a>
                                    </div>
                                    
                                    <div class="benefits-list mt-4">
                                        <small class="text-muted">
                                            <i class="fas fa-check text-success me-2"></i>Primera consulta de Evaluación<br>
                                            <i class="fas fa-check text-success me-2"></i>Modalidad presencial y online<br>
                                            <i class="fas fa-check text-success me-2"></i>Profesional Titulada y Colegiada
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WhatsApp Flotante -->
    <div class="whatsapp-float">
        <a href="https://wa.me/51991846646?text=Hola,%20me%20interesa%20una%20consulta%20psicológica" 
           class="whatsapp-btn" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer-brand">
                        <h5><img src="https://imgur.com/yMlu81k.png" alt="logo katarsys" width="160"></h5>
                        <p class="text-muted">
                            Tu bienestar mental es nuestra prioridad. certificado para ayudarte a alcanzar tu mejor versión.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-links">
                        <h6>Enlaces Rápidos</h6>
                        <ul class="list-unstyled">
                            <li><a href="#servicios" class="text-muted">Servicios</a></li>
                            <li><a href="#paquetes" class="text-muted">Paquetes</a></li>
                            <li><a href="#testimonios" class="text-muted">Testimonios</a></li>
                            <li><a href="login.php" class="text-muted">Portal de Clientes</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0 text-muted">
                        &copy; 2025 Katarsys - Consultorio Psicológico. Todos los derechos reservados.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="social-links">
                        <a href="https://www.facebook.com/katarsyscp" class="text-muted me-3" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.tiktok.com/@katarsys_psic" class="text-muted me-3" target="_blank" rel="noopener noreferrer"><i class="fab fa-tiktok"></i></a>
                        <a href="https://www.instagram.com/katarsys_psic/#" class="text-muted me-3" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="elfsight-app-49fa1187-2bfb-4c65-813d-b114f0ce0949" data-elfsight-app-lazy></div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling para enlaces de navegación
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Cambiar navbar al hacer scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });

        // Animaciones de aparición
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);

        // Observar elementos para animación
        document.querySelectorAll('.service-card, .pricing-card, .testimonial-card').forEach(el => {
            observer.observe(el);
        });

        // Auto-play del carousel de testimonios
        const testimonialsCarousel = new bootstrap.Carousel(document.getElementById('testimonialsCarousel'), {
            interval: 5000,
            wrap: true
        });
    </script>
</body>
</html>