<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sama Santé - Contact</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* --- VARIABLES ET RESET --- */
        :root {
            --primary-blue: #0077c8;
            --light-blue: #e8f4fd;
            --dark-blue: #005596;
            --text-dark: #333333;
            --text-muted: #666666;
            --bg-gray: #f9fbfd;
            --white: #ffffff;
            --border-color: #e0e0e0;
            --shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--bg-gray);
            color: var(--text-dark);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* --- HEADER / NAVBAR --- */
        header {
            background-color: var(--white);
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.02);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-weight: 700;
            font-size: 20px;
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-links {
            display: flex;
            gap: 25px;
            list-style: none;
        }

        .nav-links a {
            font-size: 14px;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-links a:hover, .nav-links a.active {
            color: var(--primary-blue);
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .search-bar {
            background: var(--bg-gray);
            border-radius: 20px;
            padding: 5px 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .search-bar input {
            border: none;
            background: transparent;
            outline: none;
            font-size: 12px;
        }

        .user-icon {
            background: var(--primary-blue);
            color: white;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        /* --- HERO SECTION --- */
        .hero {
            background: linear-gradient(180deg, var(--white) 0%, var(--light-blue) 100%);
            padding: 60px 0 100px;
            position: relative;
            border-bottom-left-radius: 100px;
        }

        .hero-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 40px;
        }

        .hero-text {
            flex: 1;
        }

        .hero-text h1 {
            font-size: 42px;
            line-height: 1.2;
            margin-bottom: 20px;
            color: var(--text-dark);
        }

        .hero-text h1 span {
            color: var(--primary-blue);
        }

        .hero-text p {
            color: var(--text-muted);
            margin-bottom: 30px;
            font-size: 15px;
            max-width: 90%;
        }

        .btn {
            background-color: var(--primary-blue);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .btn:hover {
            background-color: var(--dark-blue);
            transform: translateY(-2px);
        }

        .hero-image {
            flex: 1;
            position: relative;
        }

        .hero-image img {
            width: 100%;
            border-radius: 20px;
            box-shadow: var(--shadow);
            object-fit: cover;
            max-height: 400px;
        }

        /* --- INFO CARDS --- */
        .info-cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: -50px;
            position: relative;
            z-index: 10;
            margin-bottom: 60px;
        }

        .info-card {
            background: var(--white);
            padding: 25px 20px;
            border-radius: 12px;
            box-shadow: var(--shadow);
            text-align: left;
            transition: transform 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
        }

        .info-card i {
            color: var(--primary-blue);
            font-size: 20px;
            margin-bottom: 15px;
            background: var(--light-blue);
            padding: 10px;
            border-radius: 8px;
        }

        .info-card h3 {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .info-card p {
            font-size: 13px;
            color: var(--text-muted);
        }

        /* --- CONTACT & MAP SECTION --- */
        .main-contact {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 30px;
            margin-bottom: 60px;
        }

        .contact-form-container {
            background: var(--white);
            padding: 40px;
            border-radius: 15px;
            box-shadow: var(--shadow);
        }

        .contact-form-container h2 {
            color: var(--primary-blue);
            margin-bottom: 25px;
            font-size: 22px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-size: 13px;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-group input, .form-group select, .form-group textarea {
            padding: 12px 15px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            background-color: #fafafa;
        }

        .form-group input:focus, .form-group select:focus, .form-group textarea:focus {
            border-color: var(--primary-blue);
            background-color: var(--white);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .btn-submit {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            margin-top: 10px;
        }

        .map-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .map-box {
            background: var(--white);
            padding: 10px;
            border-radius: 15px;
            box-shadow: var(--shadow);
            height: 300px;
            overflow: hidden;
        }

        .map-box iframe {
            width: 100%;
            height: 100%;
            border: none;
            border-radius: 10px;
        }

        .emergency-box {
            background: linear-gradient(135deg, #e8f4fd 0%, #f0f7f4 100%);
            padding: 30px;
            border-radius: 15px;
            box-shadow: var(--shadow);
        }

        .emergency-box h3 {
            color: var(--primary-blue);
            margin-bottom: 15px;
        }

        .emergency-box p {
            font-size: 14px;
            color: var(--text-muted);
            margin-bottom: 20px;
        }

        .btn-call {
            background: white;
            color: var(--primary-blue);
            border: 2px solid var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            font-weight: 600;
        }
        
        .btn-call:hover {
            background: var(--primary-blue);
            color: white;
        }

        /* --- SERVICES SECTION --- */
        .services-section {
            text-align: center;
            margin-bottom: 60px;
        }

        .services-section h2 {
            color: var(--primary-blue);
            margin-bottom: 10px;
        }
        
        .services-section > p {
            font-size: 14px;
            color: var(--text-muted);
            margin-bottom: 30px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .service-card {
            background: var(--white);
            padding: 25px 20px;
            border-radius: 12px;
            box-shadow: var(--shadow);
            text-align: left;
        }

        .service-card i {
            color: var(--primary-blue);
            background: var(--light-blue);
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 15px;
            font-size: 18px;
        }

        .service-card h4 {
            font-size: 15px;
            margin-bottom: 8px;
        }

        .service-card p {
            font-size: 12px;
            color: var(--text-muted);
        }

        /* --- FAQ SECTION --- */
        .faq-section {
            background-color: var(--light-blue);
            padding: 60px 0;
            text-align: center;
            margin-bottom: 60px;
        }

        .faq-section h2 {
            color: var(--primary-blue);
            margin-bottom: 40px;
        }

        .faq-container {
            max-width: 800px;
            margin: 0 auto;
            text-align: left;
        }

        .faq-item {
            background: var(--white);
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .faq-question {
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-weight: 500;
        }

        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
            font-size: 14px;
            color: var(--text-muted);
        }

        .faq-item.active .faq-answer {
            padding: 0 20px 20px;
            max-height: 200px;
        }

        .faq-item.active .faq-question i {
            transform: rotate(180deg);
        }

        /* --- TESTIMONIALS --- */
        .testimonials {
            margin-bottom: 80px;
        }

        .testimonials h2 {
            color: var(--primary-blue);
            margin-bottom: 30px;
        }

        .testi-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .testi-card {
            background: var(--white);
            padding: 30px;
            border-radius: 12px;
            box-shadow: var(--shadow);
            position: relative;
        }

        .quote-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            color: var(--light-blue);
            font-size: 30px;
        }

        .testi-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        .testi-header img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        .testi-info h4 {
            font-size: 15px;
            margin-bottom: 2px;
        }

        .testi-info span {
            font-size: 12px;
            color: var(--text-muted);
        }

        .testi-card p {
            font-size: 13px;
            color: var(--text-muted);
            font-style: italic;
        }

        /* --- CTA BANNER --- */
        .cta-banner {
            background: linear-gradient(135deg, var(--primary-blue) 0%, #0099ff 100%);
            padding: 50px 20px;
            border-radius: 20px;
            text-align: center;
            color: white;
            margin-bottom: -50px;
            position: relative;
            z-index: 10;
            box-shadow: 0 10px 30px rgba(0, 119, 200, 0.3);
        }

        .cta-banner h2 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .cta-banner p {
            font-size: 15px;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .cta-banner .btn {
            background: white;
            color: var(--primary-blue);
            font-weight: 600;
            padding: 12px 40px;
        }
        
        .cta-banner .btn:hover {
            background: var(--bg-gray);
        }

        /* --- FOOTER --- */
        footer {
            background-color: var(--primary-blue);
            color: white;
            padding: 100px 0 30px; /* Top padding to accommodate overlapping CTA */
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-logo {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .footer-col p {
            font-size: 13px;
            opacity: 0.8;
            margin-bottom: 20px;
        }

        .footer-col h4 {
            margin-bottom: 20px;
            font-size: 16px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            font-size: 13px;
            opacity: 0.8;
            transition: opacity 0.3s;
        }

        .footer-links a:hover {
            opacity: 1;
            text-decoration: underline;
        }

        .footer-contact li {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 13px;
            margin-bottom: 15px;
            opacity: 0.8;
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-icons a {
            background: rgba(255,255,255,0.1);
            width: 35px;
            height: 35px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            transition: background 0.3s;
        }

        .social-icons a:hover {
            background: white;
            color: var(--primary-blue);
        }

        .footer-bottom {
            text-align: center;
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 20px;
            font-size: 12px;
            opacity: 0.7;
        }

        /* --- RESPONSIVE DESIGN --- */
        @media (max-width: 992px) {
            .info-cards, .services-grid, .testi-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .main-contact {
                grid-template-columns: 1fr;
            }
            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .hero-content {
                flex-direction: column;
                text-align: center;
            }
            .hero-text p {
                max-width: 100%;
            }
            .nav-links, .search-bar {
                display: none; /* Simplification mobile */
            }
            .form-row {
                grid-template-columns: 1fr;
            }
            .info-cards, .services-grid, .testi-grid {
                grid-template-columns: 1fr;
            }
            .footer-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="container navbar">
            <div class="logo">
                <i class="fa-solid fa-heart-pulse"></i> Sama Santé
            </div>
            <ul class="nav-links">
                <li><a href="#">Accueil</a></li>
                <li><a href="#">À propos</a></li>
                <li><a href="#">Spécialités</a></li>
                <li><a href="#">Nos Médecins</a></li>
                <li><a href="#" class="active">Contact</a></li>
            </ul>
            <div class="nav-actions">
                <div class="search-bar">
                    <input type="text" placeholder="Rechercher un médecin, maladie...">
                    <i class="fa-solid fa-magnifying-glass" style="color: gray;"></i>
                </div>
                <div class="user-icon">
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="container hero-content">
            <div class="hero-text">
                <h1>Nous sommes à votre <span>écoute</span> à <span>tout moment</span></h1>
                <p>Besoin d'aide pour une consultation, un suivi médical ou une question médicale ? Notre équipe sénégalaise est là pour vous accompagner 24h/24.</p>
                <button class="btn" onclick="alert('Redirection vers plus de détails...')">En Savoir plus</button>
            </div>
            <div class="hero-image">
                <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&q=80&w=800">
            </div>
        </div>
    </section>

    <div class="container">
        <div class="info-cards">
            <div class="info-card">
                <i class="fa-solid fa-phone"></i>
                <h3>Téléphone</h3>
                <p>+221 77 123 45 67<br>Service client disponible 24h/24</p>
            </div>
            <div class="info-card">
                <i class="fa-solid fa-envelope"></i>
                <h3>Email</h3>
                <p>contact@samasante.sn<br>Réponse sous 2 heures</p>
            </div>
            <div class="info-card">
                <i class="fa-solid fa-location-dot"></i>
                <h3>Adresse</h3>
                <p>12 Avenue Pasteur, Dakar<br>Point E, Bâtiment Bleu</p>
            </div>
            <div class="info-card">
                <i class="fa-solid fa-clock"></i>
                <h3>Horaires</h3>
                <p>Lundi - Dimanche<br><span style="color:var(--primary-blue); font-weight:600;">Urgences 24h/24</span></p>
            </div>
        </div>
    </div>

    <div class="container main-contact">
        <div class="contact-form-container">
            <h2>Envoyez-nous un message</h2>
            <form id="contactForm" onsubmit="event.preventDefault(); alert('Votre message a été envoyé avec succès !');">
                <div class="form-row">
                    <div class="form-group">
                        <label>Nom Complet</label>
                        <input type="text" placeholder="Votre nom complet" required>
                    </div>
                    <div class="form-group">
                        <label>Adresse e-mail</label>
                        <input type="email" placeholder="votre.email@gmail.com" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Numéro de téléphone</label>
                        <input type="tel" placeholder="+221 77 000 00 00" required>
                    </div>
                    <div class="form-group">
                        <label>Profession</label>
                        <select>
                            <option>Patient(e)</option>
                            <option>Professionnel de santé</option>
                            <option>Partenaire</option>
                        </select>
                    </div>
                </div>
                <div class="form-group" style="margin-bottom: 20px;">
                    <label>Message</label>
                    <textarea placeholder="Comment pouvons-nous vous aider aujourd'hui ?" required></textarea>
                </div>
                <button type="submit" class="btn btn-submit">Envoyer le message <i class="fa-solid fa-paper-plane" style="margin-left: 5px;"></i></button>
            </form>
        </div>

        <div class="map-container">
            <div class="map-box">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123447.88647000403!2d-17.46765035!3d14.7397752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zDakar!5e0!3m2!1sfr!2ssn!4v1690000000000" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="emergency-box">
                <h3>Urgence Médicale ?</h3>
                <p>Nos équipes d'intervention sont prêtes à se déplacer chez vous ou à vous recevoir 24h/24 et 7j/7.</p>
                <button class="btn btn-call" onclick="window.location.href='tel:1515'">
                    <i class="fa-solid fa-phone-volume"></i> 1515 (Numéro Vert)
                </button>
            </div>
        </div>
    </div>

    <section class="container services-section">
        <h2>Support Rapide & Services</h2>
        <p>Vos solutions directes pour accéder le plus vite possible aux professionnels de santé.</p>
        <div class="services-grid">
            <div class="service-card">
                <i class="fa-regular fa-calendar-check"></i>
                <h4>Réservation</h4>
                <p>Prenez rendez-vous en ligne avec un spécialiste.</p>
            </div>
            <div class="service-card">
                <i class="fa-solid fa-mobile-screen"></i>
                <h4>Wave / Orange</h4>
                <p>Réglez vos consultations en toute sécurité via mobile.</p>
            </div>
            <div class="service-card">
                <i class="fa-solid fa-qrcode"></i>
                <h4>Tickets QR</h4>
                <p>Accédez à votre ticket d'attente virtuellement via QR code.</p>
            </div>
            <div class="service-card">
                <i class="fa-solid fa-users-line"></i>
                <h4>Suivi File</h4>
                <p>Suivez l'avancement de la file d'attente en temps réel.</p>
            </div>
        </div>
    </section>

    <section class="faq-section">
        <div class="container">
            <h2>Questions Fréquentes</h2>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        Comment payer avec Wave ou Orange Money ? <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Lors de la validation de votre rendez-vous, sélectionnez l'option "Paiement Mobile". Vous serez redirigé vers l'interface sécurisée pour valider avec votre code secret.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        Où trouver mon ticket QR pour la consultation ? <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Votre ticket QR est envoyé automatiquement par email et SMS une fois votre rendez-vous confirmé. Vous pouvez aussi le retrouver dans votre espace patient en ligne.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        Puis-je annuler un rendez-vous en ligne ? <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Oui, vous pouvez annuler ou reporter votre rendez-vous depuis votre espace personnel jusqu'à 24h avant l'heure prévue.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container testimonials">
        <h2>Ils nous font confiance</h2>
        <div class="testi-grid">
            <div class="testi-card">
                <i class="fa-solid fa-quote-right quote-icon"></i>
                <div class="testi-header">
                    <img src="https://i.pravatar.cc/150?img=68" alt="Ousmane Fall">
                    <div class="testi-info">
                        <h4>Ousmane Fall</h4>
                        <span>Patient, Dakar</span>
                    </div>
                </div>
                <p>"Très réactif, j'ai pu avoir un rendez-vous rapidement sans faire la queue. Le suivi par SMS pour la file d'attente est révolutionnaire pour le Sénégal !"</p>
            </div>
            <div class="testi-card">
                <i class="fa-solid fa-quote-right quote-icon"></i>
                <div class="testi-header">
                    <img src="https://i.pravatar.cc/150?img=47" alt="Awa Ndiaye">
                    <div class="testi-info">
                        <h4>Awa Ndiaye</h4>
                        <span>Maman, Rufisque</span>
                    </div>
                </div>
                <p>"Pouvoir payer la consultation via Wave avant d'arriver à l'hôpital m'a fait gagner un temps précieux avec mes enfants. Merci à l'équipe."</p>
            </div>
            <div class="testi-card">
                <i class="fa-solid fa-quote-right quote-icon"></i>
                <div class="testi-header">
                    <img src="https://i.pravatar.cc/150?img=11" alt="Omar Sylla">
                    <div class="testi-info">
                        <h4>Omar Sylla</h4>
                        <span>Patient, Thiès</span>
                    </div>
                </div>
                <p>"J'ai appelé le numéro vert en pleine nuit pour une urgence, ils m'ont tout de suite orienté vers la clinique de garde la plus proche."</p>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="cta-banner">
            <h2>Besoin d'aide ou d'informations ?</h2>
            <p>Nos conseillers sont disponibles par téléphone pour répondre à toutes vos questions médicales et administratives.</p>
            <button class="btn" onclick="window.location.href='tel:1515'">
                <i class="fa-solid fa-phone" style="margin-right: 8px;"></i> Appeler le 1515
            </button>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="footer-logo">
                        <i class="fa-solid fa-heart-pulse"></i> Sama Santé
                    </div>
                    <p>Sama Santé est la plateforme numéro 1 de prise de rendez-vous médicaux et de téléconsultation au Sénégal et en Afrique de l'Ouest.</p>
                </div>
                <div class="footer-col">
                    <h4>Navigation</h4>
                    <ul class="footer-links">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Rendez-vous</a></li>
                        <li><a href="#">Cliniques</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Services</h4>
                    <ul class="footer-links">
                        <li><a href="#">Consultation Générale</a></li>
                        <li><a href="#">Pédiatrie</a></li>
                        <li><a href="#">Cardiologie</a></li>
                        <li><a href="#">Gynécologie</a></li>
                        <li><a href="#">Analyses Labo</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul class="footer-contact">
                        <li><i class="fa-solid fa-phone"></i> +221 77 123 45 67</li>
                        <li><i class="fa-solid fa-envelope"></i> contact@samasante.sn</li>
                        <li><i class="fa-solid fa-location-dot"></i> 12 Avenue Pasteur, Dakar</li>
                    </ul>
                    <div class="social-icons">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2026 Sama Santé. Tous droits réservés.
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                question.addEventListener('click', () => {
                    // Ferme les autres
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            otherItem.classList.remove('active');
                        }
                    });
                    // Ouvre/ferme l'actuel
                    item.classList.toggle('active');
                });
            });
        });
    </script>
</body>
</html>