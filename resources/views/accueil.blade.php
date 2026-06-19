<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sama Santé</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    font-family: 'Segoe UI', sans-serif;
    background:#f8fbff;
}

/* NAVBAR */

.navbar{
    background:white;
    box-shadow:0 2px 10px rgba(0,0,0,.05);
}

.logo{
    color:#1989d7;
    font-weight:700;
}

/* HERO */

.hero{
    min-height:700px;
    background:linear-gradient(to right,#ffffff,#eef6ff);
    display:flex;
    align-items:center;
    overflow:hidden;
}

.hero-card{
    background:white;
    padding:50px;
    border-radius:25px;
    box-shadow:0 10px 30px rgba(0,0,0,.05);
}

.hero h1{
    font-size:52px;
    font-weight:800;
}

.hero h1 span{
    color:#1989d7;
}

.hero p{
    font-size:20px;
    margin-top:20px;
}

.btn-primary-custom{
    background:#1989d7;
    border:none;
    padding:15px 35px;
    border-radius:10px;
    color:white;
    text-decoration:none;
}

.hero-image img{
    width:100%;
}

/* SERVICES */

.section-title{
    text-align:center;
    margin-bottom:60px;
}

.section-title h2{
    font-weight:800;
}

.service-card{
    background:white;
    border-radius:20px;
    padding:35px;
    height:100%;
    box-shadow:0 10px 20px rgba(0,0,0,.04);
}

.service-icon{
    width:55px;
    height:55px;
    background:#e9f5ff;
    color:#1989d7;
    border-radius:12px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:24px;
}

/* STEPS */

.step{
    text-align:center;
}

.step-circle{
    width:70px;
    height:70px;
    background:#1989d7;
    color:white;
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    margin:auto;
    font-size:24px;
}

/* STATS */

.stats{
    margin-top:50px;
}

.stat-box{
    background:white;
    padding:30px;
    border-radius:15px;
    text-align:center;
    box-shadow:0 5px 15px rgba(0,0,0,.05);
}

.stat-box h3{
    color:#1989d7;
    font-weight:800;
}

/* ADVANTAGES */

.advantage{
    border-radius:20px;
    padding:40px;
    color:white;
}

.blue{
    background:#1989d7;
}

.light{
    background:#dff0ff;
    color:#111;
}

/* APP SECTION */

.app-section{
    padding:100px 0;
}

.phone{
    width:250px;
    border-radius:40px;
    box-shadow:0 10px 30px rgba(0,0,0,.2);
}

/* TESTIMONIAL */

.testimonial{
    background:white;
    padding:30px;
    border-radius:20px;
    height:100%;
    box-shadow:0 5px 15px rgba(0,0,0,.05);
}

/* CTA */

.cta{
    background:linear-gradient(135deg,#0068b5,#27a8ff);
    color:white;
    border-radius:30px;
    padding:80px;
}

/* FOOTER */

footer{
    background:#0068b5;
    color:white;
}

footer a{
    color:white;
    text-decoration:none;
}

</style>

</head>
<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg">
<div class="container">

<a class="navbar-brand logo" href="#">
🏥 Sama Santé
</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav mx-auto">

    <ul class="navbar-nav mx-auto">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('accueil') }}">
            Accueil
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('service') }}">
            Services
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('propos') }}">
            À propos
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('rendezvous') }}">
            Rendez-vous
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('contact') }}">
            Contact
        </a>
    </li>

</ul>

</ul>

<input
class="form-control w-25"
placeholder="Rechercher un médecin..."
>

</div>

</div>
</nav>

<!-- HERO -->

<section class="hero">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-5">

<div class="hero-card">

<h1>
RÉSERVEZ VOS CONSULTATIONS
<span>SANS PERDRE DU TEMPS.</span>
</h1>

<p>
Réservez vos consultations médicales en ligne et
suivez votre file d'attente en temps réel partout au Sénégal.
</p>

<a href="#" class="btn-primary-custom">
En savoir plus
</a>

</div>

</div>

<div class="col-lg-7 hero-image text-center">

<img src="{{ asset('images/doctors.png') }}" alt="Médecins">

</div>

</div>

</div>

</section>

<!-- SERVICES -->

<section class="py-5">

<div class="container">

<div class="section-title">
<h5 class="text-primary">Notre Expertise</h5>
<h2>Services intelligents pour votre santé</h2>
</div>

<div class="row g-4">

<div class="col-md-6">
<div class="service-card">
<h5>Réservation médicale</h5>
<p>Prenez rendez-vous avec les meilleurs spécialistes.</p>
</div>
</div>

<div class="col-md-6">
<div class="service-card">
<h5>Paiement mobile</h5>
<p>Réglez vos consultations via Wave, Orange Money ou Free Money.</p>
</div>
</div>

<div class="col-md-6">
<div class="service-card">
<h5>File d'attente</h5>
<p>Suivez votre position en temps réel.</p>
</div>
</div>

<div class="col-md-6">
<div class="service-card">
<h5>Ticket QR Code</h5>
<p>Recevez votre QR d'enregistrement.</p>
</div>
</div>

</div>

</div>

</section>

<!-- STEPS -->

<section class="py-5">

<div class="container">

<h2 class="text-center fw-bold mb-5">
Un parcours simple et rapide
</h2>

<div class="row text-center">

<div class="col">
<div class="step">
<div class="step-circle">1</div>
<h6 class="mt-3">Choisir</h6>
</div>
</div>

<div class="col">
<div class="step">
<div class="step-circle">2</div>
<h6 class="mt-3">Réserver</h6>
</div>
</div>

<div class="col">
<div class="step">
<div class="step-circle">3</div>
<h6 class="mt-3">Payer</h6>
</div>
</div>

<div class="col">
<div class="step">
<div class="step-circle">4</div>
<h6 class="mt-3">Recevoir QR</h6>
</div>
</div>

<div class="col">
<div class="step">
<div class="step-circle">5</div>
<h6 class="mt-3">Suivre son tour</h6>
</div>
</div>

</div>

</div>

</section>

<!-- STATS -->

<section class="stats pb-5">

<div class="container">

<div class="row g-4">

<div class="col-md-3">
<div class="stat-box">
<h3>10,000+</h3>
Patients
</div>
</div>

<div class="col-md-3">
<div class="stat-box">
<h3>120+</h3>
Médecins
</div>
</div>

<div class="col-md-3">
<div class="stat-box">
<h3>25+</h3>
Structures
</div>
</div>

<div class="col-md-3">
<div class="stat-box">
<h3>98%</h3>
Satisfaction
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
<div class="advantage blue">
<h4>Gain de temps</h4>
<p>Réduction du temps d'attente.</p>
</div>
</div>

<div class="col-lg-4">
<div class="advantage light">
<h4>Paiement sécurisé</h4>
<p>Transactions fiables et sécurisées.</p>
</div>
</div>

<div class="col-lg-4">
<div class="advantage light">
<h4>Accès simplifié</h4>
<p>Interface ergonomique.</p>
</div>
</div>

</div>

</div>

</section>

<!-- APP -->

<section class="app-section">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-5 text-center">
<img
src="{{ asset('images/mobile-app.jpeg') }}"
class="phone"
>
</div>

<div class="col-lg-7">

<h2 class="fw-bold">
Une expérience médicale pensée pour le confort des patients
</h2>

<ul class="mt-4">
<li>Zéro stress d'attente</li>
<li>Paiement sans contact</li>
<li>Historique médical</li>
</ul>

</div>

</div>

</div>

</section>

<!-- TEMOIGNAGES -->

<section class="py-5">

<div class="container">

<h2 class="text-center fw-bold mb-5">
Ils nous font confiance
</h2>

<div class="row g-4">

<div class="col-md-4">
<div class="testimonial">
⭐⭐⭐⭐⭐
<p>Excellent service.</p>
</div>
</div>

<div class="col-md-4">
<div class="testimonial">
⭐⭐⭐⭐⭐
<p>Très pratique pour prendre rendez-vous.</p>
</div>
</div>

<div class="col-md-4">
<div class="testimonial">
⭐⭐⭐⭐⭐
<p>Le ticket QR est génial.</p>
</div>
</div>

</div>

</div>

</section>

<!-- CTA -->

<section class="pb-5">

<div class="container">

<div class="cta text-center">

<h2 class="fw-bold">
Modernisez votre expérience médicale dès aujourd'hui
</h2>

<p class="mt-3">
Rejoignez des milliers de patients.
</p>

<div class="mt-4">

<a href="#" class="btn btn-light px-4">
Réserver maintenant
</a>

<a href="#" class="btn btn-outline-light px-4">
Explorer la plateforme
</a>

</div>

</div>

</div>

</section>

<!-- FOOTER -->

<footer class="pt-5">

<div class="container">

<div class="row">

<div class="col-md-3">
<h5>Sama Santé</h5>
</div>

<div class="col-md-3">
<h5>Navigation</h5>
</div>

<div class="col-md-3">
<h5>Services</h5>
</div>

<div class="col-md-3">
<h5>Contact</h5>
</div>

</div>

<hr>

<div class="text-center py-3">
© 2026 Sama Santé
</div>

</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
<h1>YES</h1>
</html>