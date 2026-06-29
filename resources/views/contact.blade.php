<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Sama Santé</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            --primary-blue: #007bff;
            --light-blue: #e9f2ff;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            background: linear-gradient(to bottom, rgba(146,214,255,0.2), rgba(255,255,255,0.2));
        }

        .text-primary { color: var(--primary-blue) !important; }
        .bg-primary { background-color: var(--primary-blue) !important; }
        .bg-light-blue { background-color: var(--light-blue) !important; }

        /* Navbar Custom */
        .navbar { background-color: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); }

        /* Custom Shapes & Backgrounds */
        .hero-contact {
            background-image: url('images/image1.jpg');
            background-repeat: no-repeat;
            position: relative;
            height: 200vh;
            width: 100%;
        }

        /* HEADER */
        header {
            height: 70px;
            background: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 25px;
            border-radius: 15px;
            margin: 10px;
        }
        
        .hero-section {
            background-image: url('images/image1.jpg');
            background-size: cover;
            background-position: center;
            padding: 120px 0;
            border-bottom-right-radius: 170px;
            position: relative;
            margin-bottom: 100px;
            padding-top: 50px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo i {
            color: #1688e8;
            font-size: 22px;
        }

        .logo h2 {
            color: #1688e8;
            font-size: 22px;
        }

        nav {
            display: flex;
            gap: 30px;
        }

        .card-custom:hover { transform: translateY(-5px); transition: 0.3s; }

        /* Form Controls */
        .form-control, .form-select {
            background-color: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 10px;
            padding: 0.75rem 1rem;
        }

        nav a {
            text-decoration: none;
            color: black;
            font-size: 14px;
        }

        .active {
            color: #1688e8;
            border-bottom: 2px solid #1688e8;
            padding-bottom: 6px;
        }

        .menu-droite {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .zone-recherche {
            display: flex;
            align-items: center;
            background: #f0f0f0;
            padding: 8px 15px;
            gap: 12px;
            border-radius: 25px;
        }

        .zone-recherche input {
            border: none;
            outline: none;
            background: transparent;
        }

        .menu-droite img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
        }

        /* FOOTER */
        .footer {
            background-color: #0b5ed7;
            color: white;
        }
        
        .F {
            background-color: #f8f9fa;
            padding: 60px 0;
            width: 100%;
            height: 100%;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }
        .F h3 {
            margin-left: 40px;
        }
        .Ff {
            background-color: #f8f9fa;
            padding: 60px 0;
            width: 90%;
            height: 100%;
            text-align: center;
            margin-left: 60px;
        }

        .footer a { color: rgba(255,255,255,0.8); text-decoration: none; }
        .footer a:hover { color: white; text-decoration: underline; }
    </style>
</head>

<body>

    @if(session('success'))
    <div class="alert alert-success text-center m-3">
        {{ session('success') }}
    </div>
    @endif

    <header>
        <div class="logo">
            <i class="bi bi-heart-pulse-fill"></i>
            <h2>Sama Santé</h2>
        </div>

        <nav>
            @auth
                <a href="{{ route('accueil.utilisateur') }}">Accueil</a>
            @else
                <a href="{{ route('accueil') }}">Accueil</a>
            @endauth
            <a href="{{ route('service') }}">Services</a>
            <a href="{{ route('propos') }}">À propos</a>
            <a href="{{ route('rendezvous') }}">Rendez-vous</a>
            <a class="active" href="{{ route('contact') }}">Contact</a>
        </nav>

        <div class="menu-droite">
            <div class="zone-recherche">
                <input type="text" placeholder="Rechercher un rendez-vous..........">
                <i class="bi bi-search"></i>
            </div>

            <i class="bi bi-bell"></i>

            @auth
                <div style="display:flex; align-items:center; gap:10px;">
                    <span style="font-weight:bold; color:#1688e8;">
                        {{ Auth::user()->nom }}
                    </span>
                    <a href="#">
                        <img src="{{ Auth::user()->photo ? asset('storage/'.Auth::user()->photo) : asset('images/homme.png') }}" alt="Profil">
                    </a>
                </div>
            @else
                <a href="{{ route('login') }}">
                    <img src="{{ asset('images/p1.png') }}" alt="Connexion">
                </a>
            @endauth
        </div>
    </header>

    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="fw-bold mb-3"> Nous sommes à votre <span class="text-primary">écoute</span> à tout moment</h1>
                <p class="mb-4 text-muted">Besoin d'aide pour une consultation, un paiement ou une question médicale ? Notre équipe sénégalaise est là pour vous accompagner 24h/24.</p>
                <a href="#form-contact" class="btn btn-primary btn-lg rounded-pill px-4">En Savoir plus</a>
            </div>
        </div>
    </section>

    <section class="container" style="margin-top: -100px; position: relative; z-index: 10;">
        <div class="row g-4 justify-content-center">
            <div class="col-md-3 col-6">
                <div class="card card-custom h-100 p-3 text-center shadow-sm border-0">
                    <div class="icon-box-light mx-auto mb-2 text-primary fs-3"><i class="bi bi-telephone-fill"></i></div>
                    <h6 class="fw-bold text-primary mb-1">Téléphone</h6>
                    <small class="text-muted d-block">+221 78 036 25 07</small>
                    <small class="text-muted" style="font-size: 0.7rem;">Numéro vert disponible 24h/24</small>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card card-custom h-100 p-3 text-center shadow-sm border-0">
                    <div class="icon-box-light mx-auto mb-2 text-primary fs-3"><i class="bi bi-envelope-fill"></i></div>
                    <h6 class="fw-bold text-primary mb-1">Email</h6>
                    <small class="text-muted d-block">contact@samasante.sn</small>
                    <small class="text-muted" style="font-size: 0.7rem;">Réponse sous 2 heures</small>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card card-custom h-100 p-3 text-center shadow-sm border-0">
                    <div class="icon-box-light mx-auto mb-2 text-primary fs-3"><i class="bi bi-geo-alt-fill"></i></div>
                    <h6 class="fw-bold text-primary mb-1">Adresse</h6>
                    <small class="text-muted d-block">VDN, Mermoz, Dakar</small>
                    <small class="text-muted" style="font-size: 0.7rem;">Siège Sama Santé Sénégal</small>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card card-custom h-100 p-3 text-center shadow-sm border-0">
                    <div class="icon-box-light mx-auto mb-2 text-primary fs-3"><i class="bi bi-clock-fill"></i></div>
                    <h6 class="fw-bold text-primary mb-1">Horaires</h6>
                    <small class="text-muted d-block">Lun-Sam : 8h-18h</small>
                    <small class="text-primary fw-bold" style="font-size: 0.7rem;">Urgences 24h/24</small>
                </div>
            </div>
        </div>
    </section>

    <section id="form-contact" class="container py-5 mt-4">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="card card-custom p-4 p-md-5 shadow border-0 rounded-4">
                    <h3 class="text-primary fw-bold mb-4 text-center">Envoyez-nous un message</h3>
                    
                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted">Nom complet</label>
                                <input type="text" name="nom_complet" class="form-control" placeholder="Votre prénom et nom" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted">Adresse email</label>
                                <input type="email" name="email" class="form-control" placeholder="exemple@domaine.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted">Numéro de téléphone</label>
                                <input type="tel" name="numero_telephone" class="form-control" placeholder="+221 7X XXX XX XX" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted">Profession</label>
                                <select name="profession" class="form-select">
                                    <option value="patient" selected>Patient / Particulier</option>
                                    <option value="medecin">Professionnel de santé / Médecin</option>
                                    <option value="partenaire">Partenaire</option>
                                    <option value="autre">Autre</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold text-muted">Message</label>
                                <textarea name="message" class="form-control" rows="5" placeholder="Comment pouvons-nous vous aider aujourd'hui ?" required></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary w-100 rounded-pill py-2 fw-bold">Envoyer le message <i class="bi bi-send ms-2"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card card-custom overflow-hidden mb-4 p-0 shadow-sm border-0">
                    <div class="position-relative">
                        <img src="{{ asset('images/carte.jpg') }}" alt="Carte Dakar" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                    </div>
                </div>

                <div class="card card-custom bg-light-blue p-4 p-md-5 text-center shadow-sm border-0">
                    <h5 class="text-primary fw-bold mb-3">Urgence Médicale ?</h5>
                    <p class="text-muted small mb-4">Pour toute urgence vitale, contactez directement le SAMU ou notre ligne d'assistance disponible 24h/24.</p>
                    <button class="btn btn-light text-primary fw-bold rounded-pill w-100 shadow-sm border py-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-telephone-fill me-2 bg-primary text-white rounded-circle p-1" style="font-size: 0.8rem;"></i>
                        1515 (Numéro Vert)
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5 text-center">
        <h3 class="text-primary fw-bold mb-2">Support Rapide & Services</h3>
        <p class="text-muted mb-5">Trouvez rapidement une solution pour vos besoins et paiements.</p>
        
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card card-custom h-100 p-4 shadow-sm border-0">
                    <div class="icon-box-light mx-auto text-primary fs-3 mb-2"><i class="bi bi-calendar2-check"></i></div>
                    <h6 class="fw-bold">Réservation</h6>
                    <small class="text-muted">Pour des rendez-vous en ligne avec un spécialiste.</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-custom h-100 p-4 shadow-sm border-0">
                    <div class="icon-box-light mx-auto text-primary fs-3 mb-2"><i class="bi bi-phone"></i></div>
                    <h6 class="fw-bold">Wave / Orange</h6>
                    <small class="text-muted">Réglez vos consultations en ligne avec le mobile money.</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-custom h-100 p-4 shadow-sm border-0">
                    <div class="icon-box-light mx-auto text-primary fs-3 mb-2"><i class="bi bi-qr-code-scan"></i></div>
                    <h6 class="fw-bold">Tickets QR</h6>
                    <small class="text-muted">Accédez à votre ticket virtuel et scannez-le à l'hôpital.</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-custom h-100 p-4 shadow-sm border-0">
                    <div class="icon-box-light mx-auto text-primary fs-3 mb-2"><i class="bi bi-person-lines-fill"></i></div>
                    <h6 class="fw-bold">Suivi File</h6>
                    <small class="text-muted">Suivez votre position dans la file d'attente en temps réel.</small>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h3 class="text-primary fw-bold mb-5">Questions Fréquentes</h3>
                
                <div class="accordion text-start" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                                Comment payer avec Wave ou Orange Money ?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted small">
                                Lors de la confirmation de votre rendez-vous, sélectionnez l'option de paiement "Mobile Money". Vous serez redirigé vers une page sécurisée pour entrer votre numéro de téléphone et valider le paiement via l'application Wave ou Orange Money.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                Où trouver mon ticket QR pour la consultation ?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted small">
                                Votre ticket QR est disponible dans la section "Mes Rendez-vous" de votre espace personnel. Vous recevrez également une copie par email après la validation de votre réservation.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                Puis-je annuler un rendez-vous en ligne ?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted small">
                                Oui, vous pouvez annuler ou reporter un rendez-vous jusqu'à 24h avant l'heure prévue, directement depuis votre tableau de bord.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="F py-5">
        <h3 class="text-primary fw-bold mb-4">Ils nous font confiance</h3>
        <div class="row g-4 Ff">
            <div class="col-md-4 mx-auto">
                <div class="card card-custom h-100 p-4 position-relative border-0 shadow-sm text-start">
                    <i class="bi bi-quote fs-1 text-primary opacity-25 position-absolute top-0 end-0 mt-2 me-3"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('images/p1.png') }}" class="rounded-circle me-3" width="50" height="50" alt="Avatar">
                        <div>
                            <h6 class="fw-bold mb-0">Aissatou Fall</h6>
                            <small class="text-muted">Patiente, Dakar</small>
                        </div>
                    </div>
                    <p class="text-muted small mb-0">"Très facile à utiliser ! L'assistance par mail est très rapide et j'ai pu prendre rendez-vous pour ma mère sans aucun problème."</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="container py-5 mb-4">
        <div class="cta-section p-5 text-center shadow-lg mx-auto position-relative overflow-hidden bg-primary text-white rounded-4" style="max-width: 900px;">
            <div class="position-relative z-1">
                <h2 class="fw-bold mb-3">Besoin d'aide ou d'informations ?</h2>
                <p class="mb-4 text-white-50">Nos conseillers sont disponibles par téléphone ou en ligne pour répondre à toutes vos questions médicales et administratives.</p>
                <button class="btn btn-light text-primary fw-bold px-4 py-3 rounded-pill shadow-sm">
                    <i class="bi bi-telephone-fill me-2"></i> Appeler le 1515
                </button>
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
            <div class="text-center pt-3 border-top border-light border-opacity-25 small d-flex justify-content-between align-items-center flex-wrap gap-2">
                <p class="mb-0">&copy; 2026 Sama Santé. Tous droits réservés.</p>
                <a href="{{ route('landing') }}" class="btn btn-sm btn-light text-primary rounded-pill px-3 fw-bold shadow-sm">
                    <i class="bi bi-person-badge-fill me-1"></i> Espace Médecins
                </a>
            </div>
        </div>
    </footer>
</body>
</html>