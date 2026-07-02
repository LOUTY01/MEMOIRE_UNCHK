<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sama Santé</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
font-family:'Segoe UI',sans-serif;
background:#f7fbff;
overflow-x:hidden;
}

/* NAVBAR */

.navbar{
background:#fff;
height:75px;
box-shadow:0 2px 15px rgba(0,0,0,.05);
z-index:1000;
}

.logo{
    display:flex;
    align-items:center;
    gap:8px;
    text-decoration:none;
    color:#1c8adb;
    font-size:22px; /* plus petit */
    font-weight:700;
    white-space:nowrap;
    line-height:1;
}

.logo:hover{
    color:#1c8adb;
    text-decoration:none;
}

.logo-img{
    width:40px;   /* réduit */
    height:40px;
    padding:6px;
    background:#1c8adb;
    border-radius:10px;
    object-fit:contain;
}
.navbar-nav .nav-link{
font-size:14px;
color:#222;
margin:0 10px;
font-weight:500;
}

.navbar-nav .nav-link:hover{
color:#1c8adb;
}

.search-box{
width:250px;
border-radius:30px;
padding:8px 15px;
background:#f5f7fb;
border:none;
font-size:13px;
}

.btn-login{
border:1px solid #1c8adb;
color:#1c8adb;
padding:8px 20px;
border-radius:10px;
text-decoration:none;
font-size:14px;
font-weight:600;
}

.btn-register{
background:#1c8adb;
color:white;
padding:8px 20px;
border-radius:10px;
text-decoration:none;
font-size:14px;
font-weight:600;
}

.avatar{
width:35px;
height:35px;
border-radius:50%;
object-fit:cover;
}

/* HERO */

.hero{
    position:relative;
    min-height:90vh;
    display:flex;
    align-items:center;

    background:url("{{ asset('images/doctors.png') }}") no-repeat center;
    background-size:cover;
}

/* overlay presque invisible */
.hero::before{
    content:"";
    position:absolute;
    inset:0;
    background:rgba(255,255,255,0.08); /* presque rien */
}

/* contenu */
.hero-content{
    position:relative;
    z-index:2;
    max-width:600px;
}

/* carte ULTRA transparente */
.hero-card{
    background:rgba(255,255,255,0.10); /* très léger */
    backdrop-filter:blur(3px);         /* flou très faible */
    -webkit-backdrop-filter:blur(3px);

    padding:55px;
    border-radius:25px;
}

/* texte un peu plus contrasté pour rester lisible */
.hero-title{
    font-size:52px;
    font-weight:800;
    line-height:1.1;
    color:#0b1220;
}

.hero-title span{
    color:#1989d7;
    display:block;
}

.hero-text{
    margin-top:25px;
    font-size:20px;
    color:#111827;
}

.btn-hero{
    display:inline-block;
    margin-top:25px;
    background:rgba(25,137,215,0.85);
    color:white;
    padding:14px 35px;
    border-radius:10px;
    text-decoration:none;
    font-weight:600;
}

/* VAGUE */

.wave{
position:absolute;
bottom:0;
left:0;
width:100%;
height:170px;
background:
linear-gradient(
90deg,
#1c6b59,
#8dc5ad,
#e6ce6a
);

clip-path:polygon(
0 70%,
10% 60%,
20% 75%,
35% 50%,
50% 80%,
65% 45%,
80% 65%,
100% 50%,
100% 100%,
0 100%
);

opacity:.9;
}

.section{
padding:100px 0;
}

.section-title{
text-align:center;
margin-bottom:60px;
}

.section-title h5{
color:#1c8adb;
font-weight:700;
}

.section-title h2{
font-weight:800;
font-size:42px;
}
.service-card{
background:white;
padding:35px;
border-radius:20px;
height:100%;
box-shadow:0 5px 20px rgba(0,0,0,.05);
transition:.3s;
}

.service-card:hover{
transform:translateY(-5px);
}

.service-icon{
width:55px;
height:55px;
background:#edf7ff;
color:#1c8adb;
border-radius:12px;
display:flex;
align-items:center;
justify-content:center;
font-size:22px;
margin-bottom:20px;
}

.timeline-wrapper{
position:relative;
}

.timeline-line{
position:absolute;
top:28px;
left:10%;
width:80%;
height:3px;
background:#1c8adb;
z-index:0;
}

.step-circle{
width:60px;
height:60px;
border-radius:50%;
background:#dff0ff;
color:#1c8adb;
display:flex;
align-items:center;
justify-content:center;
margin:auto;
font-size:22px;
position:relative;
z-index:2;
}

.step-circle.active{
background:#1c8adb;
color:white;
}

.step p{
font-size:13px;
}

.stat-box{
background:white;
padding:30px;
border-radius:15px;
text-align:center;
box-shadow:0 5px 15px rgba(0,0,0,.05);
}

.stat-box h3{
font-size:42px;
font-weight:800;
color:#1c8adb;
}

.stat-box span{
font-size:12px;
font-weight:700;
letter-spacing:1px;
}

.advantage-box{
background:#eaf6ff;
padding:40px;
border-radius:18px;
height:100%;
}

.primary-box{
background:#1989d7;
color:white;
}

.adv-icon{
font-size:28px;
margin-bottom:20px;
}
.phone-img{
width:280px;
border-radius:35px;
box-shadow:0 20px 40px rgba(0,0,0,.15);
}

.experience-title{
font-size:50px;
font-weight:800;
margin-bottom:40px;
}

.feature-item{
display:flex;
gap:15px;
margin-bottom:30px;
}

.feature-item i{
font-size:22px;
color:#1989d7;
}

.testimonial-section{
background:#eef5fc;
padding:100px 0;
}

.testimonial-card{
background:white;
padding:35px;
border-radius:20px;
height:100%;
box-shadow:0 5px 15px rgba(0,0,0,.05);
}

.stars{
color:#ffc107;
font-size:18px;
margin-bottom:20px;
}

.user-box{
display:flex;
align-items:center;
gap:12px;
margin-top:20px;
}

.user-box img{
width:50px;
height:50px;
border-radius:50%;
object-fit:cover;
}

.cta-box{
background:linear-gradient(
135deg,
#0068b5,
#2da8ff
);
padding:80px;
border-radius:30px;
color:white;
box-shadow:0 15px 40px rgba(0,104,181,.25);
}

.footer{
background:#0068b5;
color:white;
padding-top:70px;
}

.footer-title{
font-weight:700;
margin-bottom:20px;
}

.footer-links{
list-style:none;
padding:0;
}

.footer-links li{
margin-bottom:10px;
}

.footer-links a{
color:white;
text-decoration:none;
}

.social-icons{
display:flex;
gap:15px;
margin-top:15px;
}

.social-icons a{
width:40px;
height:40px;
background:rgba(255,255,255,.15);
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
color:white;
text-decoration:none;
font-size:18px;
}
.search-box{
    text-transform: uppercase;
}
.resultat-container{
    width:100%;
    display:flex;
    justify-content:center;
    margin-top:40px;
}

.resultat-box{
    width:700px;
}

.resultat-card{
    border:none;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0,0,0,.08);
    margin-bottom:15px;
}

.resultat-card img{
    width:120px;
    height:120px;
    object-fit:cover;
    border-radius:50%;
    margin:auto;
    margin-top:20px;
}
.navbar-nav {
    flex-wrap: nowrap;
}

.navbar-nav .nav-link {
    white-space: nowrap;
}
</style>

</head>

<body>
 

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg">

<div class="container d-flex align-items-center flex-nowrap">

    <!-- LOGO -->
    <a class="logo d-flex align-items-center me-4" href="#">
        <img src="{{ asset('images/logo.png') }}" alt="Sama Santé" class="logo-img">
        <span>Sama Santé</span>
    </a>

    <!-- TOGGLER -->
    <button class="navbar-toggler" type="button"
        data-bs-toggle="collapse"
        data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- MENU -->
    <div class="collapse navbar-collapse" id="menu">

        <!-- IMPORTANT: enlève mx-auto -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('accueil') }}">Accueil</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('service') }}">Services</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('propos') }}">À propos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('rendezvous') }}">Rendez-vous</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </li>

        </ul>

        <!-- DROITE -->
        <form method="GET" action="{{ route('medecins.search') }}" class="d-flex me-3">
            <input type="text" name="q" class="search-box" placeholder="Rechercher un médecin">
            <button class="btn btn-primary ms-2">OK</button>
        </form>

        <div class="d-flex align-items-center gap-2">
            <a href="{{ route('login') }}" class="btn-login">Connexion</a>
            <a href="{{ route('register') }}" class="btn-register">S'inscrire</a>
        </div>

    </div>

</div>

</nav>
@if(request()->has('q') && request('q') != '')

<div class="resultat-container">

    <div class="resultat-box">

        @if(isset($resultats) && count($resultats) > 0)

            <div class="alert alert-success text-center">
                <strong>{{ count($resultats) }}</strong>
                médecin(s) trouvé(s)
            </div>

            @foreach($resultats as $medecin)

                <div class="card resultat-card">

                    @if($medecin->image)
                        <img src="{{ asset('storage/'.$medecin->image) }}">
                    @endif

                    <div class="card-body text-center">

                        <h4 class="text-primary">
                            {{ $medecin->prenom }}
                            {{ $medecin->nom }}
                        </h4>

                        <p>
                            <strong>Spécialité :</strong>
                            {{ $medecin->specialite }}
                        </p>

                        <p>
                            <strong>Âge :</strong>
                            {{ $medecin->age }} ans
                        </p>

                    </div>

                </div>

            @endforeach

        @else

            <div class="alert alert-warning text-center p-4">
                <h4>🔍 Aucun médecin trouvé</h4>

                <p class="mb-0">
                    Aucun médecin ne correspond à votre recherche :
                    <strong>{{ $terme }}</strong>
                </p>
            </div>

        @endif

    </div>

</div>

@endif
<!-- HERO -->

<!-- HERO -->
<section class="hero">

    <div class="container">
        <div class="hero-content">

            <div class="hero-card">

                <h1 class="hero-title">
                    RÉSERVEZ VOS CONSULTATIONS
                    <span>SANS PERDRE DU TEMPS.</span>
                </h1>

                <p class="hero-text">
                    Réservez vos consultations médicales
                    en ligne et suivez votre file d'attente
                    en temps réel partout au Sénégal.
                </p>

                <a href="#" class="btn-hero">
                    En savoir plus
                </a>

            </div>

        </div>
    </div>

</section>

<!-- FIN HERO -->
 <!-- SERVICES -->

<section class="section">

<div class="container">

<div class="section-title">

<h5>Notre Expertise</h5>

<h2>
Services intelligents pour votre santé
</h2>

<p class="text-muted">
Une suite complète d'outils digitaux pour faciliter l'accès aux soins au Sénégal.
</p>

</div>

<div class="row g-4">

<div class="col-md-6 col-lg-6">

<div class="service-card">

<div class="service-icon">
<i class="bi bi-calendar-check"></i>
</div>

<h5>Réservation médicale</h5>

<p>
Prenez rendez-vous avec les meilleurs spécialistes en quelques clics, 24h/24 et 7j/7.
</p>

</div>

</div>

<div class="col-md-6 col-lg-6">

<div class="service-card">

<div class="service-icon">
<i class="bi bi-credit-card"></i>
</div>

<h5>Paiement mobile</h5>

<p>
Réglez vos consultations via Wave, Orange Money ou Free Money en toute simplicité.
</p>

</div>

</div>

<div class="col-md-6 col-lg-6">

<div class="service-card">

<div class="service-icon">
<i class="bi bi-hourglass-split"></i>
</div>

<h5>File d'attente</h5>

<p>
Suivez votre position dans la file d'attente en temps réel sur votre smartphone.
</p>

</div>

</div>

<div class="col-md-6 col-lg-6">

<div class="service-card">

<div class="service-icon">
<i class="bi bi-qr-code"></i>
</div>

<h5>Ticket QR Code</h5>

<p>
Recevez un ticket numérique pour un enregistrement instantané à votre arrivée.
</p>

</div>

</div>

</div>

</div>

</section>

<!-- PARCOURS -->

<section class="section pt-0">

<div class="container">

<div class="text-center mb-5">

<h2 class="fw-bold">
Un parcours simple et rapide
</h2>

<p class="text-muted">
En moins de 2 minutes, votre consultation est réservée et sécurisée.
</p>

</div>

<div class="timeline-wrapper">

<div class="timeline-line"></div>

<div class="row text-center">

<div class="col">

<div class="step-circle active">
<i class="bi bi-search"></i>
</div>

<h6 class="mt-3">Choisir un service</h6>

<p>
Recherchez par spécialité ou structure de santé.
</p>

</div>

<div class="col">

<div class="step-circle">
<i class="bi bi-calendar-check"></i>
</div>

<h6 class="mt-3">Réserver</h6>

<p>
Sélectionnez le créneau idéal pour votre rendez-vous.
</p>

</div>

<div class="col">

<div class="step-circle">
<i class="bi bi-wallet2"></i>
</div>

<h6 class="mt-3">Payer en ligne</h6>

<p>
Paiement sécurisé via Mobile Money.
</p>

</div>

<div class="col">

<div class="step-circle">
<i class="bi bi-qr-code"></i>
</div>

<h6 class="mt-3">Recevoir le QR</h6>

<p>
Confirmation instantanée avec votre ticket digital.
</p>

</div>

<div class="col">

<div class="step-circle">
<i class="bi bi-stopwatch"></i>
</div>

<h6 class="mt-3">Suivre son tour</h6>

<p>
Recevez les alertes en temps réel.
</p>

</div>

</div>

</div>

</div>

</section>

<!-- STATS -->

<section class="pb-5">

<div class="container">

<div class="row g-4">

<div class="col-md-3">

<div class="stat-box">

<h3>10,000+</h3>

<span>PATIENTS</span>

</div>

</div>

<div class="col-md-3">

<div class="stat-box">

<h3>120+</h3>

<span>MÉDECINS</span>

</div>

</div>

<div class="col-md-3">

<div class="stat-box">

<h3>25+</h3>

<span>STRUCTURES</span>

</div>

</div>

<div class="col-md-3">

<div class="stat-box">

<h3>98%</h3>

<span>SATISFACTION</span>

</div>

</div>

</div>

</div>

</section>

<!-- AVANTAGES -->

<section class="pb-5">

<div class="container">

<div class="row g-4">

<div class="col-lg-4">

<div class="advantage-box primary-box">

<div class="adv-icon">
<i class="bi bi-clock-history"></i>
</div>

<h4>Gain de temps</h4>

<p>
Réduisez votre temps d'attente jusqu'à 70% grâce au suivi en temps réel.
</p>

</div>

</div>

<div class="col-lg-4">

<div class="advantage-box">

<div class="adv-icon">
<i class="bi bi-shield-check"></i>
</div>

<h4>Paiement sécurisé</h4>

<p>
Transactions fiables et conformes aux normes bancaires locales.
</p>

</div>

</div>

<div class="col-lg-4">

<div class="advantage-box">

<div class="adv-icon">
<i class="bi bi-airplane"></i>
</div>

<h4>Accès simplifié</h4>

<p>
Interface pensée pour tous les niveaux de confort numérique.
</p>

</div>

</div>

</div>

</div>

</section>
<!-- EXPERIENCE PATIENT -->

<section class="section">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-5 text-center">

<img
src="{{ asset('images/mobile-app.jpeg') }}"
class="phone-img"
alt="Application mobile">

</div>

<div class="col-lg-7">

<h2 class="experience-title">
Une expérience médicale pensée pour le confort des patients
</h2>

<div class="feature-item">

<i class="bi bi-check-circle-fill"></i>

<div>

<h5>Zéro stress d'attente</h5>

<p>
Plus besoin d'attendre des heures sur des chaises inconfortables.
Arrivez quand c'est votre tour.
</p>

</div>

</div>

<div class="feature-item">

<i class="bi bi-check-circle-fill"></i>

<div>

<h5>Paiement sans contact</h5>

<p>
Finis les problèmes de monnaie et de caisse.
Tout est réglé d'avance en toute sécurité.
</p>

</div>

</div>

<div class="feature-item">

<i class="bi bi-check-circle-fill"></i>

<div>

<h5>Historique complet</h5>

<p>
Accédez à vos ordonnances et résultats directement depuis votre profil.
</p>

</div>

</div>

</div>

</div>

</div>

</section>

<!-- TEMOIGNAGES -->

<section class="testimonial-section">

<div class="container">

<h2 class="text-center fw-bold mb-5">
Ils nous font confiance
</h2>

<div class="row g-4">

<div class="col-lg-4">

<div class="testimonial-card">

<div class="stars">
★★★★★
</div>

<p>
"Avec Sama Santé, je peux désormais
prendre rendez-vous sans perdre toute
ma journée à attendre à l'hôpital."
</p>

<div class="user-box">

<img src="{{ asset('images/user1.png') }}">

<div>
<h6 class="mb-0">Mariama Sarr</h6>
<small>Entrepreneure</small>
</div>

</div>

</div>

</div>

<div class="col-lg-4">

<div class="testimonial-card">

<div class="stars">
★★★★★
</div>

<p>
"Le paiement mobile et la réservation
en ligne rendent les consultations
beaucoup plus simples."
</p>

<div class="user-box">

<img src="{{ asset('images/user2.png') }}">

<div>
<h6 class="mb-0">Dr. Ibrahim Kane</h6>
<small>Cardiologue</small>
</div>

</div>

</div>

</div>

<div class="col-lg-4">

<div class="testimonial-card">

<div class="stars">
★★★★★
</div>

<p>
"Le ticket QR permet un accès rapide
et évite les longues files d'attente."
</p>

<div class="user-box">

<img src="{{ asset('images/user3.png') }}">

<div>
<h6 class="mb-0">Papa Amadou Fall</h6>
<small>Retraité</small>
</div>

</div>

</div>

</div>

</div>

</div>

</section>

<!-- CTA -->

<!-- CTA -->
<section class="pb-5">

<div class="container">

<div class="cta-box text-center">

<h2 class="fw-bold">
Modernisez votre expérience médicale dès aujourd'hui
</h2>

<p class="mt-3">
Rejoignez des milliers de patients qui ont déjà simplifié
leur accès aux soins de santé au Sénégal.
</p>

<div class="mt-4">

<!-- Réserver -->
<a href="{{ auth()->check() ? route('rendezvous') : route('login') }}"
   class="btn btn-light px-4 py-3 me-3">
   Réserver maintenant
</a>

<!-- Explorer -->
<a href="{{ route('service') }}" class="btn btn-outline-light px-4 py-3">
Explorer la plateforme
</a>

</div>

</div>

</div>

</section>
<!-- FOOTER -->

<footer class="footer">

<div class="container">

<div class="row gy-4">

<div class="col-lg-3">

<h5 class="footer-title d-flex align-items-center gap-2">
    <img src="{{ asset('images/icone-sama-sante.png') }}"
         alt="Sama Santé"
         width="30"
         height="30">
    Sama Santé
</h5>

<p>
La plateforme qui révolutionne la gestion
des rendez-vous médicaux au Sénégal.
</p>

</div>

<div class="col-lg-3">

<h5 class="footer-title">
Navigation
</h5>

<ul class="footer-links">

<li><a href="#">Accueil</a></li>

<li><a href="#">Services</a></li>

<li><a href="#">Rendez-vous</a></li>

<li><a href="#">À propos</a></li>

<li><a href="#">Contact</a></li>

</ul>

</div>

<div class="col-lg-3">

<h5 class="footer-title">
Services
</h5>

<ul class="footer-links">

<li>Consultation médicale</li>

<li>Paiement sécurisé</li>

<li>Réservation rapide</li>

<li>Ticket QR Code</li>

<li>Suivi d'attente</li>

</ul>

</div>

<div class="col-lg-3">

<h5 class="footer-title">
Contact
</h5>

<p>📞 +221 77 123 45 67</p>

<p>✉ contact@samasante.sn</p>

<p>📍 Dakar, Sénégal</p>

<div class="social-icons">

<a href="#"><i class="bi bi-facebook"></i></a>

<a href="#"><i class="bi bi-instagram"></i></a>

<a href="#"><i class="bi bi-linkedin"></i></a>

<a href="#"><i class="bi bi-twitter"></i></a>

</div>

</div>

</div>

<hr>

<div class="text-center py-3">
© 2026 Sama Santé - Tous droits réservés
</div>

</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {

    const message = document.getElementById('message-recherche');

    if (message) {

        setTimeout(function () {
            message.style.transition = "0.5s";
            message.style.opacity = "0";

            setTimeout(function () {
                message.remove();
            }, 500);

        }, 5000); // 5 secondes
    }

});
</script>

</body>

</html>