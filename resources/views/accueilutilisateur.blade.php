<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sama Santé - Accueil Utilisateur</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

/* BASE */
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
}

/* LOGO */
.logo{
display:flex;
align-items:center;
gap:8px;
text-decoration:none;
color:#1c8adb;
font-size:22px;
font-weight:700;
white-space:nowrap;
}

.logo-img{
width:40px;
height:40px;
padding:6px;
background:#1c8adb;
border-radius:10px;
object-fit:contain;
}

/* MENU CENTRÉ SUR UNE LIGNE */
.navbar-nav{
display:flex;
flex-direction:row;
gap:25px;
align-items:center;
}

.navbar-nav .nav-link{
color:#000;
font-size:14px;
white-space:nowrap;
}

.navbar-nav .nav-link:hover{
color:#1c8adb;
}

/* SEARCH */
.search-box{
width:250px;
border-radius:30px;
padding:8px 15px;
background:#f5f7fb;
border:none;
font-size:13px;
text-transform: uppercase;
}

/* USER */
.user-box-nav{
display:flex;
align-items:center;
gap:10px;
}

.user-avatar{
width:40px;
height:40px;
border-radius:50%;
object-fit:cover;
border:2px solid #1c8adb;
}

/* HERO */
.hero{
position:relative;
min-height:70vh;
display:flex;
align-items:center;
background:url("{{ asset('images/doctors.png') }}") no-repeat center;
background-size:cover;
}

.hero::before{
content:"";
position:absolute;
inset:0;
background:rgba(255,255,255,0.10);
}

.hero-content{
position:relative;
z-index:2;
max-width:650px;
}

.hero-card{
background:rgba(255,255,255,0.15);
backdrop-filter:blur(4px);
padding:50px;
border-radius:25px;
}

.hero-title{
font-size:45px;
font-weight:800;
color:#0b1220;
}

.hero-title span{
color:#1989d7;
display:block;
}

/* RESULTATS */
.results-title{
text-align:center;
margin:50px 0 20px;
font-weight:800;
}

.card-medecin{
border:none;
border-radius:20px;
box-shadow:0 5px 20px rgba(0,0,0,0.08);
transition:0.3s;
text-align:center;
padding:20px;
}

.card-medecin:hover{
transform:translateY(-8px);
}

.medecin-img{
width:100px;
height:100px;
border-radius:50%;
object-fit:cover;
border:3px solid #1c8adb;
margin:auto;
}

.btn-rdv{
background:#1c8adb;
color:#fff;
border:none;
padding:10px;
border-radius:10px;
width:100%;
margin-top:10px;
text-decoration:none;
display:block;
text-align:center;
}

.btn-rdv:hover{
background:#1471b3;
}

/* FOOTER */
.footer {
background-color: #0b5ed7;
color: white;
}

.footer a {
color: rgba(255,255,255,0.8);
text-decoration: none;
}

.footer a:hover {
color: white;
text-decoration: underline;
}

</style>

</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">

<div class="container d-flex align-items-center">

<!-- LOGO À GAUCHE -->
<a class="logo me-4" href="#">
<img src="{{ asset('images/logo.png') }}" class="logo-img">
Sama Santé
</a>

<!-- MENU CENTRÉ -->
<div class="collapse navbar-collapse justify-content-center">
<ul class="navbar-nav">

<li class="nav-item"><a class="nav-link" href="{{ route('accueil.utilisateur') }}">Accueil</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('service') }}">Services</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('propos') }}">À propos</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('rendezvous') }}">Rendez-vous</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>

</ul>
</div>

<!-- DROITE (SEARCH + USER) -->
<div class="d-flex align-items-center gap-3">

<form method="GET" action="{{ route('medecins.search') }}" class="d-flex">
<input type="text" name="q" class="search-box me-2"
placeholder="Rechercher un médecin" required>
<button class="btn btn-primary btn-sm">OK</button>
</form>

<div class="user-box-nav">

<span class="fw-bold">{{ Auth::user()->nom }}</span>

<img class="user-avatar"
src="{{ Auth::user()->photo
? asset('storage/'.Auth::user()->photo)
: asset('images/default-user.png') }}">

<form method="POST" action="{{ route('logout') }}">
@csrf
<button class="btn btn-sm btn-danger">Déconnexion</button>
</form>

</div>

</div>

</div>
</nav>

<!-- HERO -->
<section class="hero">
<div class="container">
<div class="hero-content">
<div class="hero-card">

<h1 class="hero-title">
RÉSERVEZ VOS CONSULTATIONS
<span>SANS PERDRE DU TEMPS</span>
</h1>

<p>Réservez vos consultations médicales en ligne facilement.</p>

<a href="{{ route('rendezvous') }}" class="btn btn-primary mt-3">
Réserver maintenant
</a>

</div>
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
</body>
</html>