<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sama Santé</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>

<!-- HEADER -->
<header>
    <div class="logo">
        <i class="fas fa-heartbeat"></i>
        <h2>Sama Santé</h2>
    </div>

    <nav>
        <a href="{{ route('accueil') }}">Accueil</a>
        <a class="active" href="{{ route('service') }}">Services</a>
        <a href="{{ route('propos') }}">À propos</a>
        <a href="{{ route('rendezvous') }}">Rendez-vous</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>

    <div class="menu-droite">
        <div class="zone-recherche">
            <input type="text" placeholder="Rechercher un rendez-vous...">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>

        <i class="fa-solid fa-bell"></i>

        <a href="#">
            <img src="{{ asset('images/homme.png') }}">
        </a>
    </div>
</header>

<!-- HERO -->
<section class="notre-texte">
    <div class="contenue">
        <div class="badge">
            <i class="fa-solid fa-circle"></i>
            Nos Services
        </div>

        <h1>
            DES SERVICES DE SANTÉ MODERNES
            CONÇUS
            <span>POUR SIMPLIFIER VOTRE QUOTIDIEN</span>
        </h1>

        <p>
            Nous allions expertise médicale et innovation technologique pour offrir une expérience fluide.
        </p>

        <div class="centre">
            <button>Découvrir nos solutions</button>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section class="services">
    <div class="container">
        <h2>Un écosystème complet de soins</h2>

        <p class="subtitle">
            Tout ce dont vous avez besoin pour gérer votre santé.
        </p>

        <div class="grid">

            <div class="card">
                <div class="icon"><i class="fa-solid fa-kit-medical"></i></div>
                <h3>Consultation générale</h3>
                <p>Accédez à des médecins qualifiés.</p>
            </div>

            <div class="card">
                <div class="icon"><i class="fa-solid fa-calendar-check"></i></div>
                <h3>Rendez-vous</h3>
                <p>Réservez facilement en ligne.</p>
            </div>

            <div class="card">
                <div class="icon"><i class="fa-solid fa-chart-line"></i></div>
                <h3>Suivi médical</h3>
                <p>Suivi personnalisé des patients.</p>
            </div>

            <div class="card">
                <div class="icon"><i class="fa-solid fa-qrcode"></i></div>
                <h3>QR Code</h3>
                <p>Identification rapide.</p>
            </div>

        </div>
    </div>
</section>

<!-- WHY US -->
<section class="why-us">
    <div class="container">
        <div class="content">

            <div class="left">
                <h2>Pourquoi choisir Sama Santé ?</h2>

                <div class="features">

                    <div class="feature">
                        <i class="fa-solid fa-user-doctor"></i>
                        <h3>Professionnels qualifiés</h3>
                        <p>Médecins certifiés et expérimentés.</p>
                    </div>

                    <div class="feature">
                        <i class="fa-solid fa-laptop-medical"></i>
                        <h3>Technologie moderne</h3>
                        <p>Plateforme simple et rapide.</p>
                    </div>

                    <div class="feature">
                        <i class="fa-solid fa-earth-africa"></i>
                        <h3>Accessibilité</h3>
                        <p>Disponible partout au Sénégal.</p>
                    </div>

                    <div class="feature">
                        <i class="fa-solid fa-shield-heart"></i>
                        <h3>Confidentialité</h3>
                        <p>Données sécurisées.</p>
                    </div>

                </div>
            </div>

            <div class="right">
                <div class="circle-image">
                    <img src="{{ asset('images/GRandyoff.jpeg') }}">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- HOW IT WORKS -->
<section class="how-it-works">
    <div class="container">
        <h2>Comment ça marche ?</h2>

        <div class="steps">

            <div class="step">
                <div class="number">1</div>
                <h3>Inscription</h3>
                <p>Créez un compte.</p>
            </div>

            <div class="line"></div>

            <div class="step">
                <div class="number">2</div>
                <h3>Recherche</h3>
                <p>Trouvez un service.</p>
            </div>

            <div class="line"></div>

            <div class="step">
                <div class="number">3</div>
                <h3>Réservation</h3>
                <p>Prenez rendez-vous.</p>
            </div>

            <div class="line"></div>

            <div class="step">
                <div class="number">4</div>
                <h3>Consultation</h3>
                <p>Consultez votre médecin.</p>
            </div>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="cta-box">
        <h2>Prêt à commencer ?</h2>
        <p>Rejoignez Sama Santé dès maintenant.</p>

        <div class="cta-buttons">
            <a href="#" class="btn btn-light">Prendre rendez-vous</a>
            <a href="#" class="btn btn-outline">Contact</a>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="pied-page">
    <div class="contenue-pied">

        <div class="colonne-pied">
            <h4>Sama Santé</h4>
            <p>Plateforme de gestion médicale.</p>
        </div>

        <div class="colonne-pied">
            <h4>Navigation</h4>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

        <div class="colonne-pied">
            <h4>Contact</h4>
            <p>Dakar, Sénégal</p>
        </div>

    </div>

    <div class="footer-bottom">
        © 2025 Sama Santé
    </div>
</footer>

</body>
</html>

<!-- STYLE -->
<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background: linear-gradient(to right, #84DBF0);
}

/* HEADER */
header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:15px 25px;
    background:white;
    border-radius:15px;
}

.logo{
    display:flex;
    align-items:center;
    gap:10px;
}

nav{
    display:flex;
    gap:20px;
}

nav a{
    text-decoration:none;
    color:black;
}

.active{
    color:#1688e8;
}

/* HERO */
.notre-texte{
    height:600px;
    background:url("{{ asset('images/bienvenue.png') }}") center/cover;
    border-radius:0 0 80px 0;
    position:relative;
}

.contenue{
    position:absolute;
    top:40px;
    left:20px;
    width:500px;
    background:rgba(255,255,255,0.8);
    padding:20px;
    border-radius:20px;
}

/* SERVICES */
.services, .why-us, .how-it-works, .cta-section{
    padding:60px 20px;
}

.container{
    max-width:1200px;
    margin:auto;
}

/* GRID */
.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
}

.card{
    background:white;
    padding:20px;
    border-radius:10px;
}

/* FOOTER */
.pied-page{
    background:#0f8fe4;
    color:white;
    padding:40px 20px;
}

.footer-bottom{
    text-align:center;
    margin-top:20px;
}

</style>