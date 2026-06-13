<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sama Santé - Plateforme de Santé au Sénégal</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        :root {
            --primary-color: #2e8bc0;
            --secondary-color: #1a5f7a;
            --light-bg: #f8f9fa;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        /* Navbar */
        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            color: var(--primary-color) !important;
            font-weight: 700;
            font-size: 1.5rem;
        }
        
        /* Hero Section */
        .hero-section {
           /* background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);*/
            position: relative;
            min-height: 600px;
            display: flex;
            align-items: center;
            overflow: hidden;
            border-bottom-right-radius: 50%;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('image 1.png') center/cover;
            opacity: 100;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            background: rgba(255, 255, 255, 0.678);
            padding: 3rem;
            border-radius: 15px;
            max-width: 600px;
        }
        .hero-content p {
            color: black;
            font-size: 1.4rem;
            font-weight: 350;
        }
        .hero-title {
            color: var(--secondary-color);
            font-weight: 700;
            line-height: 1.1;
        }
        
        .btn-primary-custom {
            background-color: var(--primary-color);
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .btn-primary-custom:hover {
            background-color: var(--secondary-color);
            transform: translateY(-2px);
        }
        
        /* Cards */
        .card-custom {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s;
        }
        
        .card-custom:hover {
            transform: translateY(-5px);
        }
        
        .icon-box {
            width: 60px;
            height: 60px;
            background: var(--light-bg);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }
        
        .icon-box i {
            font-size: 1.8rem;
            color: var(--primary-color);
        }
        
        /* Stats */
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
        }
        
        /* Values Section */
        .value-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            height: 100%;
            transition: all 0.3s;
        }
        
        .value-card:hover {
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        /* How it Works */
        .step-circle {
            width: 80px;
            height: 80px;
            background: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
            font-size: 2rem;
        }
        
        /* Team Section */
        .team-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .team-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
        
        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            border-radius: 20px;
            padding: 4rem 2rem;
        }
        
        /* Footer */
        footer {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            transition: all 0.3s;
        }
        
        .social-icon:hover {
            background: rgba(255,255,255,0.3);
            color: white;
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-heart-pulse-fill me-2"></i>Sama Santé
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">À propos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Rendez-vous</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
                <div class="d-flex align-items-center">
                    <button class="btn btn-outline-primary me-2">
                        <i class="bi bi-search"></i>
                    </button>
                    <div class="dropdown">
                        <button class="btn btn-link text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="image 1.png" class="rounded-circle" width="35" alt="User">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Profil</a></li>
                            <li><a class="dropdown-item" href="#">Déconnexion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title mb-4">
                    UNE PLATEFORME DE SANTÉ PENSÉE POUR <span class="text-primary">SIMPLIFIER VOS CONSULTATIONS MÉDICALES</span>
                </h1>
                <p class="lead mb-4">
                    Nous révolutionnons l'accès aux soins au Sénégal en connectant patients et professionnels de santé à travers une expérience numérique fluide, sécurisée et humaine.
                </p>
                <button class="btn btn-primary btn-primary-custom btn-lg">
                    En Savoir plus <i class="bi bi-arrow-right ms-2"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Notre Histoire -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="image 2.png" alt="Hôpital" class="img-fluid rounded-4 shadow">
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h2 class="text-primary mb-4">Notre Histoire</h2>
                    <p class="text-muted">
                        Sama Santé est née d'un constat simple : l'accès aux soins de qualité au Sénégal est souvent freiné par des processus administratifs complexes et de longs délais d'attente. Fondée par des passionnés de technologie et de santé, notre mission est de moderniser le parcours patient.
                    </p>
                    <p class="text-muted">
                        Depuis notre lancement à Dakar, nous avons travaillé sans relâche pour bâtir un écosystème numérique robuste qui respecte les réalités locales tout en adoptant les standards technologiques mondiaux.
                    </p>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="border-start border-4 border-primary ps-3">
                                <h3 class="text-primary fw-bold">+10 000</h3>
                                <p class="text-muted mb-0">Patients accompagnés</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="border-start border-4 border-primary ps-3">
                                <h3 class="text-primary fw-bold">+120</h3>
                                <p class="text-muted mb-0">Médecins partenaires</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card card-custom p-4 h-100">
                        <div class="icon-box">
                            <i class="bi bi-briefcase-medical"></i>
                        </div>
                        <h3 class="text-primary mb-3">Notre mission</h3>
                        <p class="text-muted">
                            Simplifier chaque étape de votre parcours de santé grâce à une technologie intuitive, pour que vous puissiez vous concentrer sur ce qui compte vraiment : votre bien-être.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-custom p-4 h-100">
                        <div class="icon-box">
                            <i class="bi bi-eye"></i>
                        </div>
                        <h3 class="text-primary mb-3">Notre vision</h3>
                        <p class="text-muted">
                            Devenir l'acteur de référence de la santé numérique en Afrique de l'Ouest, en créant un pont indestructible entre l'expertise médicale et l'innovation digitale.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nos Valeurs -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="text-primary mb-3">Nos Valeurs</h2>
                <p class="text-muted">Les piliers qui guident chacune de nos actions.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="value-card">
                        <div class="icon-box mx-auto">
                            <i class="bi bi-lightbulb"></i>
                        </div>
                        <h5>Innovation</h5>
                        <p class="text-muted small">Repousser les limites technologiques pour améliorer les soins de santé.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="value-card">
                        <div class="icon-box mx-auto">
                            <i class="bi bi-universal-access"></i>
                        </div>
                        <h5>Accessibilité</h5>
                        <p class="text-muted small">Garantir que chaque citoyen puisse obtenir un rendez-vous simplement.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="value-card">
                        <div class="icon-box mx-auto">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h5>Confidentialité</h5>
                        <p class="text-muted small">Une sécurité bancaire pour vos données médicales les plus sensibles.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="value-card">
                        <div class="icon-box mx-auto">
                            <i class="bi bi-award"></i>
                        </div>
                        <h5>Professionnalisme</h5>
                        <p class="text-muted small">Collaborer uniquement avec des praticiens certifiés et dévoués.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comment ça marche -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="text-primary mb-3">Comment ça marche ?</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="step-circle">
                        <i class="bi bi-search"></i>
                    </div>
                    <h5>1. Choisir un service</h5>
                    <p class="text-muted small">Sélectionnez la spécialité médicale dont vous avez besoin.</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="step-circle">
                        <i class="bi bi-calendar-check"></i>
                    </div>
                    <h5>2. Prendre rendez-vous</h5>
                    <p class="text-muted small">Choisissez le créneau qui vous convient parmi nos cliniques partenaires.</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="step-circle">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <h5>3. Payer via Mobile</h5>
                    <p class="text-muted small">Réglez instantanément via Wave ou Orange Money en toute sécurité.</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="step-circle">
                        <i class="bi bi-qr-code"></i>
                    </div>
                    <h5>4. Recevoir ticket QR</h5>
                    <p class="text-muted small">Présentez votre ticket numérique à la clinique le jour J.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-3">
                    <div class="stat-number">10 000+</div>
                    <p class="text-muted">PATIENTS</p>
                </div>
                <div class="col-md-3">
                    <div class="stat-number">120+</div>
                    <p class="text-muted">MÉDECINS</p>
                </div>
                <div class="col-md-3">
                    <div class="stat-number">25+</div>
                    <p class="text-muted">CLINIQUES</p>
                </div>
                <div class="col-md-3">
                    <div class="stat-number">24h/24</div>
                    <p class="text-muted">ASSISTANCE</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="text-center mb-5">
                <p class="text-muted">Une équipe engagée pour votre santé</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="team-card bg-white">
                        <img src="Médecins Partenaires.png" alt="Médecin">
                        <div class="p-3 text-center">
                            <h6 class="mb-1">Corps Médical</h6>
                            <p class="text-primary small mb-0">Médecins & Spécialistes</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-card bg-white">
                        <img src="div.h-64.png" alt="Assistance">
                        <div class="p-3 text-center">
                            <h6 class="mb-1">Assistance</h6>
                            <p class="text-primary small mb-0">Conseillers Patients</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-card bg-white">
                        <img src="image 5.png" alt="Développeurs">
                        <div class="p-3 text-center">
                            <h6 class="mb-1">Développeurs</h6>
                            <p class="text-primary small mb-0">Ingénieurs Logiciel</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-card bg-white">
                        <img src="image 6.png" alt="Support">
                        <div class="p-3 text-center">
                            <h6 class="mb-1">Support client</h6>
                            <p class="text-primary small mb-0">Expérience Utilisateur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="cta-section text-center text-white">
                <h2 class="mb-3">Simplifiez vos rendez-vous médicaux dès aujourd'hui</h2>
                <p class="mb-4 opacity-75">
                    Rejoignez des milliers de sénégalais qui font déjà confiance à Sama Santé pour leur santé et celle de leurs proches.
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <button class="btn btn-light btn-lg px-5 rounded-pill">
                        Prendre rendez-vous
                    </button>
                    <button class="btn btn-outline-light btn-lg px-5 rounded-pill">
                        Contactez-nous
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-white py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-3"><i class="bi bi-heart-pulse-fill me-2"></i>Sama Santé</h5>
                    <p class="small opacity-75">
                        Sama Santé est une plateforme de gestion de files d'attente et de rendez-vous médicaux en ligne au Sénégal.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h6 class="mb-3">Navigation</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Accueil</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Services</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Rendez-vous</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">À propos</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h6 class="mb-3">Services</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Consultation générale</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Prise de rendez-vous</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Achat de ticket</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Suivi de la file</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Services d'urgence</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h6 class="mb-3">Contact</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-telephone me-2"></i>+221 77 123 45 67</li>
                        <li class="mb-2"><i class="bi bi-envelope me-2"></i>contact@samasante.sn</li>
                        <li class="mb-3"><i class="bi bi-geo-alt me-2"></i>Dakar, Sénégal</li>
                    </ul>
                    <div class="mt-3">
                        <a href="#" class="social-icon text-white"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon text-white"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon text-white"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="social-icon text-white"><i class="bi bi-twitter"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4 border-white-50">
            <div class="text-center small opacity-75">
                © 2026 Sama Santé. Tous droits réservés.
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>