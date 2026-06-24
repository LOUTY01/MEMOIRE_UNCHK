<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos - Sama Santé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        :root {
            --primary-blue: #007bff;
            --light-blue: #e9f2ff;
            --dark-blue: #0056b3;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            background: linear-gradient(to bottom, rgba(146,214,255,0.2), rgba(255,255,255,0.2)); /* Dégradé linéaire avec opacité réduite */
        }

        .text-primary { color: var(--primary-blue) !important; }
        .bg-primary { background-color: var(--primary-blue) !important; }

        /* Navbar Custom */
        .navbar { background-color: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); }

        /* Hero Section */
        .hero-section {
            /* Remplacez l'URL par votre image avec asset() : background-image: url('{{ asset('images/hopital-bg.jpg') }}'); */
            background-image: url('images/image 1.png');
            background-size: cover;
            background-position: center;
            padding: 120px 0;
            border-bottom-right-radius: 150px;
            position: relative;
        }
        .hero-content {
            background: rgba(255, 255, 255, 0.85);
            padding: 40px;
            border-radius: 20px;
            max-width: 600px;
        }

        /* Cards & Shadows */
        .card-custom {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }
        .card-custom:hover { transform: translateY(-5px); }

        /* Icon Boxes */
        .icon-box-light {
            background-color: var(--light-blue);
            color: var(--primary-blue);
            width: 50px; height: 50px;
            display: flex; align-items: center; justify-content: center;
            border-radius: 10px;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        .step-icon {
            background-color: var(--primary-blue);
            color: white;
            width: 60px; height: 60px;
            display: flex; align-items: center; justify-content: center;
            border-radius: 50%;
            font-size: 1.5rem;
            margin: 0 auto 1rem auto;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, #0d6efd, #00b4d8);
            border-radius: 20px;
            color: white;
        }

        /* Footer */
        .footer { background-color: #0b5ed7; color: white; }
        .footer a { color: rgba(255,255,255,0.8); text-decoration: none; }
        .footer a:hover { color: white; text-decoration: underline; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">
                <i class="bi bi-heart-pulse-fill"></i> Sama Santé
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('accueil') }}">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link active text-primary fw-bold" href="{{ route('propos') }}">À propos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('rendezvous') }}">Rendez-vous</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                </ul>
                <div class="d-flex align-items-center">
                    <div class="input-group me-3">
                        <input type="text" class="form-control rounded-pill bg-light border-0" placeholder="Rechercher un médecin...">
                        <button class="btn btn-light rounded-pill border-0 position-absolute inset-e-0 z-3"><i class="bi bi-search"></i></button>
                    </div>
                    <span class="me-2 fw-bold">FR</span>
                    <img src="{{ asset('images/homme.png') }}" class="rounded-circle" alt="User" width="40" height="40">
                </div>
            </div>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="fw-bold mb-3">UNE PLATEFORME DE SANTÉ PENSÉE POUR <span class="text-primary">SIMPLIFIER VOS CONSULTATIONS</span> MÉDICALES</h1>
                <p class="mb-4 text-muted">Nous révolutionnons l'accès aux soins au Sénégal en connectant patients et professionnels de santé à travers une expérience numérique fluide, sécurisée et humaine.</p>
                <a href="#" class="btn btn-primary btn-lg rounded-pill px-4">En Savoir plus</a>
            </div>
        </div>
    </section>

    <section class="container py-5 mt-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <img src="{{ asset('images/image 1.png') }}" alt="Équipe Médicale" class="img-fluid rounded-4 shadow">
            </div>
            <div class="col-lg-6">
                <h2 class="text-primary fw-bold mb-4">Notre Histoire</h2>
                <p class="text-muted">Sama Santé est née d'un constat simple : l'accès aux soins au Sénégal peut parfois se révéler difficile pour de nombreuses personnes. La plateforme est le fruit de la collaboration entre professionnels de la santé et passionnés de technologie.</p>
                <p class="text-muted mb-4">Notre ambition est de démocratiser l'accès à une santé de qualité en offrant un outil simple, pratique et abordable, tout en respectant les standards éthiques et médicaux.</p>
                
                <div class="d-flex gap-4">
                    <div class="p-3 bg-white rounded-3 shadow-sm border-start border-4 border-primary">
                        <h4 class="text-primary fw-bold mb-0">+ 10 000</h4>
                        <small class="text-muted">Patients accompagnés</small>
                    </div>
                    <div class="p-3 bg-white rounded-3 shadow-sm border-start border-4 border-primary">
                        <h4 class="text-primary fw-bold mb-0">+ 120</h4>
                        <small class="text-muted">Professionnels de santé</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-4">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card card-custom h-100 p-4">
                    <div class="icon-box-light"><i class="bi bi-bullseye"></i></div>
                    <h4 class="text-primary fw-bold">Notre mission</h4>
                    <p class="text-muted mb-0">Garantir à chaque citoyen un parcours de santé grâce à une technologie intuitive, pour que vous puissiez vous concentrer sur ce qui compte vraiment : votre bien-être.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-custom h-100 p-4">
                    <div class="icon-box-light"><i class="bi bi-eye"></i></div>
                    <h4 class="text-primary fw-bold">Notre vision</h4>
                    <p class="text-muted mb-0">Devenir l'acteur de référence de la santé en ligne en Afrique de l'Ouest, en créant un environnement où chaque personne est actrice de sa propre santé.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5 text-center">
        <h2 class="text-primary fw-bold">Nos Valeurs</h2>
        <p class="text-muted mb-5">Les piliers qui guident chacune de nos actions</p>
        
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card card-custom h-100 p-4">
                    <div class="icon-box-light mx-auto"><i class="bi bi-lightbulb"></i></div>
                    <h6 class="fw-bold">Innovation</h6>
                    <small class="text-muted">Nous repoussons les limites pour offrir le meilleur de la technologie.</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-custom h-100 p-4">
                    <div class="icon-box-light mx-auto"><i class="bi bi-unlock"></i></div>
                    <h6 class="fw-bold">Accessibilité</h6>
                    <small class="text-muted">Rendre la santé accessible à tous, peu importe où vous vous trouvez.</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-custom h-100 p-4">
                    <div class="icon-box-light mx-auto"><i class="bi bi-heart"></i></div>
                    <h6 class="fw-bold">Bienveillance</h6>
                    <small class="text-muted">L'humain est au cœur de toutes nos préoccupations.</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-custom h-100 p-4">
                    <div class="icon-box-light mx-auto"><i class="bi bi-shield-check"></i></div>
                    <h6 class="fw-bold">Professionnalisme</h6>
                    <small class="text-muted">Des experts qualifiés pour vous garantir des soins de qualité.</small>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5 text-center">
        <h2 class="text-primary fw-bold mb-5">Comment ça marche ?</h2>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="step-icon"><i class="bi bi-search"></i></div>
                <h6 class="fw-bold">1. Trouvez un médecin</h6>
                <small class="text-muted">Sélectionnez la spécialité médicale dont vous avez besoin.</small>
            </div>
            <div class="col-md-3">
                <div class="step-icon"><i class="bi bi-calendar-check"></i></div>
                <h6 class="fw-bold">2. Prenez rendez-vous</h6>
                <small class="text-muted">Choisissez le créneau qui vous convient parmi nos horaires.</small>
            </div>
            <div class="col-md-3">
                <div class="step-icon"><i class="bi bi-envelope-check"></i></div>
                <h6 class="fw-bold">3. Recevez la confirmation</h6>
                <small class="text-muted">Un SMS ou email vous est envoyé pour valider votre rendez-vous.</small>
            </div>
            <div class="col-md-3">
                <div class="step-icon"><i class="bi bi-geo-alt"></i></div>
                <h6 class="fw-bold">4. Allez à votre rdv</h6>
                <small class="text-muted">Présentez-vous à la clinique ou lancez votre téléconsultation.</small>
            </div>
        </div>
    </section>

    <section class="container py-5 text-center border-top border-bottom">
        <div class="row">
            <div class="col-md-3">
                <h2 class="text-primary fw-bold">10 000+</h2>
                <p class="text-uppercase text-muted fw-bold small">Patients</p>
            </div>
            <div class="col-md-3">
                <h2 class="text-primary fw-bold">120+</h2>
                <p class="text-uppercase text-muted fw-bold small">Médecins</p>
            </div>
            <div class="col-md-3">
                <h2 class="text-primary fw-bold">25+</h2>
                <p class="text-uppercase text-muted fw-bold small">Cliniques</p>
            </div>
            <div class="col-md-3">
                <h2 class="text-primary fw-bold">24H/24</h2>
                <p class="text-uppercase text-muted fw-bold small">Assistance</p>
            </div>
        </div>
    </section>

    <section class="container py-5 text-center">
        <h4 class="fw-bold mb-5">Une équipe engagée pour votre santé</h4>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card card-custom overflow-hidden">
                    <img src="{{ asset('images/medecin.png') }}" class="card-img-top" alt="Médecin">
                    <div class="card-body">
                        <h6 class="fw-bold mb-0">Dr. Aissatou Fall</h6>
                        <small class="text-primary">Médecin Généraliste</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-custom overflow-hidden">
                    <img src="{{ asset('images/docteur.png') }}" class="card-img-top" alt="Médecin">
                    <div class="card-body">
                        <h6 class="fw-bold mb-0">René Diallo</h6>
                        <small class="text-primary">Directeur Médical</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-custom overflow-hidden">
                    <img src="{{ asset('images/image 5.png') }}" class="card-img-top" alt="Médecin">
                    <div class="card-body">
                        <h6 class="fw-bold mb-0">Ousmane Ba</h6>
                        <small class="text-primary">Responsable Tech</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-custom overflow-hidden">
                    <img src="{{ asset('images/image 6.png') }}" class="card-img-top" alt="Médecin">
                    <div class="card-body">
                        <h6 class="fw-bold mb-0">Fatou Ndiaye</h6>
                        <small class="text-primary">Support Utilisateur</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="cta-section p-5 text-center shadow-lg mx-auto" style="max-width: 700px;">
            <h2 class="fw-bold mb-3">Simplifiez vos rendez-vous médicaux dès aujourd'hui</h2>
            <p class="mb-4">Rejoignez des milliers de patients qui ont déjà choisi Sama Santé pour leur santé et celle de leurs proches.</p>
            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-light text-primary fw-bold px-4 py-2 rounded-pill">Prendre rendez-vous</button>
                <button class="btn btn-outline-light fw-bold px-4 py-2 rounded-pill">Contactez-nous</button>
            </div>
        </div>
    </section>

    <footer class="footer pt-5 pb-3 mt-5">
        <div class="container">
            <div class="row g-4 mb-4">
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3"><i class="bi bi-heart-pulse-fill"></i> Sama Santé</h5>
                    <p class="small">Sama Santé est une plateforme de gestion de santé qui met en relation professionnels de santé et patients en un clic.</p>
                </div>
                <div class="col-md-2">
                    <h6 class="fw-bold mb-3">Navigation</h6>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><a href="#">Accueil</a></li>
                        <li class="mb-2"><a href="#">Services</a></li>
                        <li class="mb-2"><a href="#">Rendez-vous</a></li>
                        <li class="mb-2"><a href="#">À propos</a></li>
                        <li class="mb-2"><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h6 class="fw-bold mb-3">Ressources</h6>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><a href="#">Espace professionnels</a></li>
                        <li class="mb-2"><a href="#">Politique de confidentialité</a></li>
                        <li class="mb-2"><a href="#">Mentions légales</a></li>
                        <li class="mb-2"><a href="#">Plan du site</a></li>
                        <li class="mb-2"><a href="#">Politique d'annulation</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6 class="fw-bold mb-3">Contact</h6>
                    <ul class="list-unstyled small mb-3">
                        <li class="mb-2"><i class="bi bi-telephone me-2"></i> +221 77 123 45 67</li>
                        <li class="mb-2"><i class="bi bi-envelope me-2"></i> contact@samasante.sn</li>
                        <li class="mb-2"><i class="bi bi-geo-alt me-2"></i> Dakar, Sénégal</li>
                    </ul>
                    <div class="d-flex gap-2">
                        <a href="#" class="text-white fs-5"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white fs-5"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-white fs-5"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="text-white fs-5"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center pt-3 border-top border-light border-opacity-25 small">
                <p class="mb-0">&copy; 2026 Sama Santé. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>