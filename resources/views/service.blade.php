<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sama Santé</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<style>

/* =======================
   BASE
======================= */
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

/* =======================
   NAVBAR
======================= */

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
font-size:22px;
font-weight:700;
}

.logo-img{
width:40px;
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
color:#fff;
padding:8px 20px;
border-radius:10px;
text-decoration:none;
font-size:14px;
font-weight:600;
}

/* =======================
   HERO
======================= */

.hero{
position:relative;
min-height:90vh;
display:flex;
align-items:center;
background:url("{{ asset('images/doctors.png') }}") no-repeat center;
background-size:cover;
}

.hero::before{
content:"";
position:absolute;
inset:0;
background:rgba(255,255,255,0.08);
}

.hero-content{
position:relative;
z-index:2;
max-width:600px;
}

.hero-card{
background:rgba(255,255,255,0.10);
backdrop-filter:blur(3px);
padding:55px;
border-radius:25px;
}

.hero-title{
font-size:52px;
font-weight:800;
line-height:1.1;
}

.hero-title span{
color:#1989d7;
display:block;
}

.hero-text{
margin-top:25px;
font-size:20px;
}

.btn-hero{
display:inline-block;
margin-top:25px;
background:#1989d7;
color:#fff;
padding:14px 35px;
border-radius:10px;
text-decoration:none;
}

/* =======================
   RESULTATS
======================= */

.resultat-container{
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
text-align:center;
padding:20px;
}

.resultat-card img{
width:120px;
height:120px;
border-radius:50%;
object-fit:cover;
}

/* =======================
   WHY US
======================= */

.why-us{
background:#f4f7fb;
padding:80px 20px;
}

.container-custom{
max-width:1200px;
margin:auto;
}

.content{
display:flex;
align-items:center;
justify-content:space-between;
gap:60px;
}

.left{
flex:1;
}

.left h2{
font-size:38px;
margin-bottom:40px;
}

.features{
display:grid;
grid-template-columns:repeat(2,1fr);
gap:35px;
}

.feature i{
color:#1e88e5;
font-size:22px;
margin-bottom:12px;
}

.feature h3{
font-size:22px;
margin-bottom:10px;
}

.feature p{
color:#555;
}

.right{
flex:1;
display:flex;
justify-content:center;
}

.circle-image{
width:420px;
height:420px;
border-radius:50%;
padding:12px;
background:linear-gradient(135deg,#0a6ea8,#26a6ff);
}

.circle-image img{
width:100%;
height:100%;
border-radius:50%;
object-fit:cover;
border:15px solid #eaf2fb;
}

/* =======================
   HOW IT WORKS
======================= */

.how-it-works{
background:#f5f7fa;
padding:80px 20px;
}

.steps{
display:flex;
justify-content:center;
gap:20px;
flex-wrap:wrap;
}

.step{
width:200px;
text-align:center;
}

.number{
width:40px;
height:40px;
background:#1e88e5;
color:white;
border-radius:50%;
display:flex;
justify-content:center;
align-items:center;
margin:auto auto 20px;
font-weight:bold;
}

.line{
width:60px;
height:2px;
background:#d6ebe6;
margin-top:20px;
}

/* =======================
   CTA
======================= */

.cta-section{
padding:50px 20px;
}

.cta-box{
max-width:1150px;
margin:auto;
background:linear-gradient(135deg,#1593e8,#0077c8);
color:white;
text-align:center;
padding:60px 20px;
border-radius:8px;
}

.cta-box h2{
color:white;
}

.cta-buttons{
margin-top:30px;
display:flex;
justify-content:center;
gap:15px;
}

.btn-light{
background:white;
color:#0077c8;
}

.btn-outline{
border:1px solid white;
color:white;
}

/* =======================
   FOOTER
======================= */

.pied-page{
background:linear-gradient(135deg,#0f8fe4,#006db5);
color:white;
padding-top:60px;
}

.contenue-pied{
width:90%;
max-width:1200px;
margin:auto;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
gap:40px;
}

.footer-bottom{
text-align:center;
padding:20px;
margin-top:40px;
border-top:1px solid rgba(255,255,255,.2);
}

</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
<div class="container">

<a class="logo" href="#">
<img src="{{ asset('images/logo.png') }}" class="logo-img">
Sama Santé
</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav mx-auto">
<li class="nav-item"><a class="nav-link" href="{{ route('accueil') }}">Accueil</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('propos') }}">À propos</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('rendezvous') }}">Rendez-vous</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
</ul>

<form method="GET" action="{{ route('medecins.search') }}" class="d-flex">
<input type="text" name="q" class="search-box me-3"
placeholder="Rechercher un médecin"
value="{{ $terme ?? '' }}" required>

<button type="submit" class="btn btn-primary">
Rechercher
</button>
</form>

<div class="d-flex align-items-center gap-2 ms-3">
<a href="{{ route('login') }}" class="btn-login">Connexion</a>
<a href="{{ route('register') }}" class="btn-register">S'inscrire</a>
</div>

</div>
</div>
</nav>

<!-- RESULTATS -->
@if(isset($resultats))
<!-- garder le code résultats ici -->
@endif

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
Réservez vos consultations médicales en ligne rapidement.
</p>

<a href="{{ route('rendezvous') }}" class="btn-hero">
En savoir plus
</a>

</div>
</div>
</div>
</section>

<!-- WHY US -->
<section class="why-us">
<!-- ton contenu Pourquoi choisir Sama Santé -->
</section>

<!-- HOW IT WORKS -->
<section class="how-it-works">
<!-- ton contenu Comment ça marche -->
</section>

<!-- CTA -->
<section class="cta-section">
<!-- ton contenu CTA -->
</section>

<!-- FOOTER -->
<footer class="pied-page">
<!-- ton footer -->
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>