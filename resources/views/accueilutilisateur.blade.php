<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sama Santé - Accueil Utilisateur</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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
}

.btn-rdv:hover{
background:#1471b3;
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

<ul class="navbar-nav mx-auto">
<li class="nav-item"><a class="nav-link" href="{{ route('accueil.utilisateur') }}">Accueil</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('propos') }}">À propos</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('rendezvous') }}">Rendez-vous</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
</ul>

<!-- SEARCH -->
<form method="GET" action="{{ route('medecins.search') }}" class="d-flex">
<input type="hidden" name="page" value="accueilutilisateur">

<input type="text" name="q" class="search-box me-3"
placeholder="Rechercher un médecin" required>

<button class="btn btn-primary">Rechercher</button>
</form>

<!-- USER -->
<div class="user-box-nav ms-3">

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

<!-- RESULTATS -->
@if(isset($resultats))

<div class="container">

<h2 class="results-title">Résultats de recherche</h2>

<div class="row justify-content-center">

@forelse($resultats as $medecin)

<div class="col-md-4 mb-4">

<div class="card card-medecin">

<img src="{{ $medecin->photo
? asset('storage/'.$medecin->photo)
: asset('images/fatou.png') }}"
class="medecin-img">

<h5 class="mt-3">
Dr {{ $medecin->prenom }} {{ $medecin->nom }}
</h5>

<p class="text-muted">{{ $medecin->specialite }}</p>

<p>📞 {{ $medecin->telephone }}</p>

<button class="btn-rdv">
<a href="{{ route('rendezvous', ['medecin_id' => $medecin->id]) }}"
   class="btn btn-rdv">
    Prendre rendez-vous
</a>
</button>

</div>

</div>

@empty

<div class="text-center">
<div class="alert alert-warning">
Aucun médecin trouvé
</div>
</div>

@endforelse

</div>
</div>

@endif

<!-- FOOTER -->
<footer class="text-center p-4 bg-dark text-white mt-5">
© 2026 Sama Santé - Tous droits réservés
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>