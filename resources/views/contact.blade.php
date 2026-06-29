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
            background: linear-gradient(to bottom, rgba(146,214,255,0.2), rgba(255,255,255,0.2));
        }

        .text-primary { color: var(--primary-blue) !important; }

        /* HEADER */
        header{
            height:70px;
            background:white;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:0 25px;
            border-radius:15px;
            margin:10px;
        }

        .logo{
            display:flex;
            align-items:center;
            gap:10px;
        }

        .logo i{
            color:#1688e8;
            font-size:22px;
        }

        .logo h2{
            color:#1688e8;
            font-size:22px;
        }

        nav{
            display:flex;
            gap:30px;
        }

        nav a{
            text-decoration:none;
            color:black;
            font-size:14px;
        }

        .active{
            color:#1688e8;
            border-bottom:2px solid #1688e8;
            padding-bottom:6px;
        }

        .menu-droite{
            display:flex;
            align-items:center;
            gap:15px;
        }

        .zone-recherche{
            display:flex;
            align-items:center;
            background:#f0f0f0;
            padding:8px 15px;
            gap:12px;
            border-radius:25px;
        }

        .zone-recherche input{
            border:none;
            outline:none;
            background:transparent;
        }

        .menu-droite img{
            width:35px;
            height:35px;
            border-radius:50%;
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
        }
    </style>
</head>

<body>

<!-- SUCCESS MESSAGE -->
@if(session('success'))
<div class="alert alert-success text-center m-3">
    {{ session('success') }}
</div>
@endif

<!-- HEADER (identique à propos) -->
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

        <i class="fa-solid fa-magnifying-glass"></i>

    </div>

    <i class="fa-solid fa-bell"></i>

    <!-- PROFIL UTILISATEUR -->
    @auth
        <div style="display:flex; align-items:center; gap:10px;">

            <!-- NOM UTILISATEUR -->
            <span style="font-weight:bold; color:#1688e8;">
                {{ Auth::user()->nom }}
            </span>

            <!-- IMAGE PROFIL -->
            <a href="#">
                <img src="{{ Auth::user()->photo
                    ? asset('storage/'.Auth::user()->photo)
                    : asset('images/homme.png') }}">
            </a>

        </div>
    @else
        <!-- SI PAS CONNECTÉ -->
        <a href="{{ route('login') }}">
            <img src="{{ asset('images/p1.png') }}">
        </a>
    @endauth

</div>

</header>


<!-- CONTACT FORM -->
<section class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">

            <div class="card shadow p-4 border-0 rounded-4">

                <h3 class="text-primary mb-4 text-center">
                    Contactez-nous
                </h3>

                <form method="POST" action="{{ route('contact.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label>Nom complet</label>
                        <input type="text" name="nom_complet" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Téléphone</label>
                        <input type="text" name="numero_telephone" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Profession</label>
                        <select name="profession" class="form-select">
                            <option value="patient">Patient</option>
                            <option value="medecin">Médecin</option>
                            <option value="partenaire">Partenaire</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Message</label>
                        <textarea name="message" rows="5" class="form-control" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 rounded-pill">
                        Envoyer
                    </button>

                </form>

            </div>

        </div>
    </div>
</section>


<!-- FOOTER (identique à propos) -->
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