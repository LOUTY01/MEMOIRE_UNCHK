<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sama Santé</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

/* RESET */
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

/* SEARCH */
.search-box{
width:250px;
border-radius:30px;
padding:8px 15px;
background:#f5f7fb;
border:none;
font-size:13px;
}

/* BUTTONS */
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

/* HERO */
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
color:#1c8adb;
display:block;
}

.hero-text{
margin-top:20px;
font-size:18px;
}

/* RESULTATS */
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
padding:20px;
text-align:center;
}

.resultat-card img{
width:120px;
height:120px;
border-radius:50%;
object-fit:cover;
margin-top:20px;
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

<!-- SEARCH -->
<form method="GET" action="{{ route('medecins.search') }}" class="d-flex">
<input type="text" name="q" class="search-box me-3"
placeholder="Rechercher un médecin"
value="{{ $terme ?? '' }}" required>

<button class="btn btn-primary">Rechercher</button>
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
<div class="resultat-container">
<div class="resultat-box">

@if(count($resultats) > 0)

<div class="alert alert-success text-center">
{{ count($resultats) }} médecin(s) trouvé(s)
</div>

@foreach($resultats as $medecin)

<div class="card resultat-card">

@if($medecin->image)
<img src="{{ asset('storage/'.$medecin->image) }}">
@endif

<h4 class="mt-3">
Dr {{ $medecin->prenom }} {{ $medecin->nom }}
</h4>

<p>{{ $medecin->specialite }}</p>

</div>

@endforeach

@else

<div class="alert alert-warning text-center">
Aucun médecin trouvé
</div>

@endif

</div>
</div>
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

<a href="{{ route('rendezvous') }}" class="btn btn-primary mt-3">
En savoir plus
</a>

</div>

</div>
</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>