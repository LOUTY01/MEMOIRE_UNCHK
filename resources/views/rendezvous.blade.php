<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Prise de rendez-vous - Sama Santé</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

body{
    background:#f5f7fb;
    font-family:'Segoe UI',sans-serif;
}

/* NAVBAR */

.navbar{
    background:white;
    box-shadow:0 2px 15px rgba(0,0,0,.08);
}

.logo{
    color:#1294e7;
    font-weight:700;
}

.nav-link{
    color:#222;
    font-size:14px;
}

.nav-link.active{
    color:#1294e7 !important;
    font-weight:600;
}

/* HERO */

.hero{
    height:650px;
    background:
    linear-gradient(rgba(255,255,255,.15),rgba(255,255,255,.15)),
    url('{{ asset("images/rendezvous.jpg") }}');
    background-size:cover;
    background-position:center;
    border-bottom-left-radius:120px;
    overflow:hidden;
    position:relative;
}

.hero-card{
    width:420px;
    margin-top:90px;
    background:rgba(255,255,255,.85);
    backdrop-filter:blur(10px);
    border-radius:25px;
    padding:35px;
}

.hero-card h1{
    font-size:46px;
    font-weight:800;
}

.hero-card span{
    color:#1294e7;
}

.hero-card p{
    color:#555;
}

.btn-main{
    background:#1294e7;
    border:none;
    color:white;
    padding:12px 30px;
    border-radius:10px;
}

/* STEPS */

.steps{
    text-align:center;
    margin-top:40px;
}

.step-circle{
    width:35px;
    height:35px;
    border-radius:50%;
    background:#1294e7;
    color:white;
    display:flex;
    align-items:center;
    justify-content:center;
    margin:auto;
}

/* CARD */

.booking-card{
    background:white;
    border-radius:20px;
    padding:30px;
    margin-top:25px;
    box-shadow:0 3px 20px rgba(0,0,0,.05);
}

.doctor-card{
    display:flex;
    gap:15px;
    background:#eef7ff;
    border-radius:12px;
    padding:12px;
    margin-top:12px;
}

.doctor-card img{
    width:60px;
    height:60px;
    border-radius:50%;
    object-fit:cover;
}

.time-btn{
    width:100%;
    border:none;
    background:#eef2f7;
    padding:10px;
    border-radius:10px;
}

.time-btn:hover{
    background:#1294e7;
    color:white;
}

/* PAYMENT */

.payment-card{
    background:white;
    padding:15px;
    border-radius:15px;
    box-shadow:0 3px 20px rgba(0,0,0,.05);
}

.pay-btn{
    background:#1294e7;
    color:white;
    border:none;
    width:100%;
    padding:12px;
    border-radius:10px;
}

/* TICKET */

.ticket-section{
    background:
    linear-gradient(135deg,#eef6ff,#d9eaff);
    padding:60px 0;
    margin-top:50px;
}

.ticket-card{
    background:white;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.ticket-header{
    background:#1294e7;
    color:white;
    padding:15px;
    text-align:center;
}

.ticket-body{
    padding:25px;
    text-align:center;
}

.queue-box{
    background:white;
    padding:25px;
    border-radius:20px;
    text-align:center;
}

.queue-number{
    color:#1294e7;
    font-size:48px;
    font-weight:800;
}

.time-est{
    color:#1294e7;
    font-size:40px;
    font-weight:800;
}

/* FEATURES */

.features{
    padding:80px 0;
}

.feature-card{
    background:white;
    padding:30px;
    border-radius:20px;
    text-align:center;
    height:100%;
    box-shadow:0 3px 15px rgba(0,0,0,.05);
}

.feature-card i{
    color:#1294e7;
    font-size:28px;
}

/* TESTIMONIAL */

.testimonial{
    background:
    linear-gradient(135deg,#eef6ff,#dbeaff);
    padding:70px 0;
}

.review-card{
    background:white;
    border-radius:20px;
    padding:25px;
}

/* FOOTER */

footer{
    background:linear-gradient(135deg,#0077d7,#12a0ff);
    color:white;
    padding:60px 0 20px;
}

footer a{
    color:white;
    text-decoration:none;
}

.social i{
    width:40px;
    height:40px;
    background:white;
    color:#1294e7;
    border-radius:50%;
    display:inline-flex;
    justify-content:center;
    align-items:center;
    margin-right:10px;
}

</style>
</head>

<body>

<nav class="navbar navbar-expand-lg">
<div class="container">

<a class="navbar-brand logo" href="#">
<i class="fa-solid fa-shield-heart"></i>
Sama Santé
</a>

<ul class="navbar-nav mx-auto">
<li class="nav-item"><a class="nav-link" href="/">Accueil</a></li>
<li class="nav-item"><a class="nav-link" href="#">Services</a></li>
<li class="nav-item"><a class="nav-link" href="#">À propos</a></li>
<li class="nav-item"><a class="nav-link active" href="#">Rendez-vous</a></li>
<li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
</ul>

</div>
</nav>

<section class="hero">
<div class="container">

<div class="hero-card">

<h1>
Réservez votre consultation
<span>en quelques minutes</span>
</h1>

<p>
Choisissez votre service, payez en ligne via Wave
ou Orange Money et suivez votre position dans
la file d'attente en temps réel.
</p>

<button class="btn-main">
En savoir plus
</button>

</div>

</div>
</section>

<div class="container">

<div class="steps">

<h3 class="fw-bold">
Finalisez votre réservation
</h3>

</div>

<div class="booking-card">

<div class="row">

<div class="col-lg-5">

<label>Quel service recherchez-vous ?</label>

<select class="form-select">
<option>-- Sélectionner --</option>
<option>Consultation générale</option>
<option>Pédiatrie</option>
<option>Cardiologie</option>
</select>

<div class="doctor-card">
<img src="{{ asset('images/image-rendezvous.png') }}">
<div>
<strong>Dr. Mawadey</strong>
<br>
Cardiologue
</div>
</div>

<div class="doctor-card">
<img src="{{ asset('images/doctor2.jpg') }}">
<div>
<strong>Dr. Aminata</strong>
<br>
Généraliste
</div>
</div>

</div>

<div class="col-lg-7">

<div class="row g-3">

<div class="col-md-4">
<button class="time-btn">09:00</button>
</div>

<div class="col-md-4">
<button class="time-btn">10:00</button>
</div>

<div class="col-md-4">
<button class="time-btn">11:00</button>
</div>

<div class="col-md-4">
<button class="time-btn">14:00</button>
</div>

<div class="col-md-4">
<button class="time-btn">15:00</button>
</div>

<div class="col-md-4">
<button class="time-btn">17:00</button>
</div>

</div>

</div>

</div>

<hr>

<div class="row mt-3">

<div class="col-md-6">
<input class="form-control" placeholder="Nom complet">
</div>

<div class="col-md-6">
<input class="form-control" placeholder="Téléphone">
</div>

<div class="col-md-12 mt-3">
<textarea class="form-control" rows="4"
placeholder="Motif de consultation"></textarea>
</div>

</div>

</div>

<div class="row mt-5">

<div class="col-lg-7">

<h4 class="fw-bold mb-3">
Méthode de paiement
</h4>

<div class="payment-card">

<div class="d-flex gap-5">

<div>
<input type="radio" checked>
Wave
</div>

<div>
<input type="radio">
Orange Money
</div>

</div>

</div>

</div>

<div class="col-lg-5">

<div class="payment-card">

<h5>Résumé</h5>

<div class="d-flex justify-content-between">
<span>Consultation</span>
<span>15.000 FCFA</span>
</div>

<div class="d-flex justify-content-between">
<span>Frais</span>
<span>500 FCFA</span>
</div>

<hr>

<div class="d-flex justify-content-between">
<strong>Total</strong>
<strong style="color:#1294e7;">
15.500 FCFA
</strong>
</div>

<button class="pay-btn mt-3">
Payer maintenant
</button>

</div>

</div>

</div>

</div>

<footer class="mt-5">
<div class="container">

<div class="row">

<div class="col-lg-4">
<h4>Sama Santé</h4>
<p>
Votre plateforme de réservation médicale.
</p>
</div>

<div class="col-lg-3">
<h5>Navigation</h5>
<p>Accueil</p>
<p>Services</p>
<p>Rendez-vous</p>
</div>

<div class="col-lg-3">
<h5>Services</h5>
<p>Consultation</p>
<p>Pédiatrie</p>
<p>Suivi médical</p>
</div>

<div class="col-lg-2">
<h5>Contact</h5>

<div class="social mt-3">
<i class="fab fa-facebook-f"></i>
<i class="fab fa-instagram"></i>
<i class="fab fa-linkedin-in"></i>
</div>

</div>

</div>

</div>
</footer>

</body>
</html>