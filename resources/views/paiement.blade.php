<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paiement - Sama Santé</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            --primary-blue: #007bff;
            --light-blue: #e9f2ff;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            background: linear-gradient(to bottom, rgba(146,214,255,0.2), rgba(255,255,255,0.2));
        }

        /* HEADER */
        header {
            height: 70px;
            background: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 25px;
            border-radius: 15px;
            margin: 10px;
        }

        .logo { display: flex; align-items: center; gap: 10px; }
        .logo i { color: #1688e8; font-size: 22px; }
        .logo h2 { color: #1688e8; font-size: 22px; margin: 0; }
        
        nav { display: flex; gap: 30px; }
        nav a { text-decoration: none; color: black; font-size: 14px; }
        nav a.active { color: #1688e8; border-bottom: 2px solid #1688e8; padding-bottom: 6px; }

        .menu-droite { display: flex; align-items: center; gap: 15px; }
        .zone-recherche { display: flex; align-items: center; background: #f0f0f0; padding: 8px 15px; gap: 12px; border-radius: 25px; }
        .zone-recherche input { border: none; outline: none; background: transparent; width: 150px; }
        .menu-droite img { width: 35px; height: 35px; border-radius: 50%; }

        /* CONTENT */
        .card-custom { border-radius: 15px; border: none; box-shadow: 0 4px 12px rgba(0,0,0,.08); }
        .method { border: 2px solid #e9ecef; padding: 15px; border-radius: 10px; cursor: pointer; text-align: center; transition: 0.3s; }
        .method.selected { border-color: #007bff; background: #e9f2ff; color: #007bff; font-weight: bold; }

        /* FOOTER */
        .footer { background-color: #0b5ed7; color: white; margin-top: 50px; }
        .footer a { color: rgba(255,255,255,0.8); text-decoration: none; }
        .footer a:hover { color: white; }
    </style>
</head>
<body>

    <header>
        <div class="logo">
            <i class="bi bi-heart-pulse-fill"></i>
            <h2>Sama Santé</h2>
        </div>

        <nav>
            <a href="{{ route('accueil') }}">Accueil</a>
            <a href="{{ route('service') }}">Services</a>
            <a href="{{ route('propos') }}">À propos</a>
            <a href="{{ route('rendezvous') }}">Rendez-vous</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>

        <div class="menu-droite">
            <div class="zone-recherche">
                <input type="text" placeholder="Rechercher...">
                <i class="bi bi-search"></i>
            </div>
            @auth
                <span style="font-weight:bold; color:#1688e8;">{{ Auth::user()->nom }}</span>
                <img src="{{ Auth::user()->photo ? asset('storage/'.Auth::user()->photo) : asset('images/homme.png') }}" alt="Profil">
            @else
                <a href="{{ route('login') }}"><img src="{{ asset('images/p1.png') }}" alt="Connexion"></a>
            @endauth
        </div>
    </header>

    <main class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-custom p-4">
                    <h3 class="text-primary fw-bold mb-4 text-center">Paiement Consultation</h3>
                    
                    <div class="bg-light p-3 rounded mb-4">
                        <p class="mb-1"><strong>Patient :</strong> {{ $rendezVous->user->nom }}</p>
                        <p class="mb-1"><strong>Médecin :</strong> {{ $rendezVous->medecin->nom }}</p>
                        <p class="mb-1"><strong>Date :</strong> {{ $rendezVous->date }} à {{ $rendezVous->heure }}</p>
                    </div>

                    <h4 class="text-center text-success fw-bold mb-4">15 500 FCFA</h4>

                    <form method="POST" action="{{ route('paiement.store') }}">
                        @csrf
                        <input type="hidden" name="rendezvous_id" value="{{ $rendezVous->id }}">
                        <input type="hidden" name="operateur" id="operateur" value="Wave">

                        <div class="d-flex gap-3 mb-4">
                            <div class="method selected flex-fill" data-operateur="Wave">Wave</div>
                            <div class="method flex-fill" data-operateur="Orange Money">Orange Money</div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 rounded-pill py-2 fw-bold">Confirmer et payer</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer pt-5 pb-3">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <h5><i class="bi bi-heart-pulse-fill"></i> Sama Santé</h5>
                    <p class="small">Plateforme de gestion de santé au Sénégal.</p>
                </div>
                <div class="col-md-4">
                    <h6>Navigation</h6>
                    <ul class="list-unstyled small">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6>Contact</h6>
                    <ul class="list-unstyled small">
                        <li>+221 77 123 45 67</li>
                        <li>contact@samasante.sn</li>
                    </ul>
                </div>
            </div>
            <div class="text-center pt-3 border-top border-light border-opacity-25 small">
                &copy; 2026 Sama Santé. Tous droits réservés.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll(".method").forEach(el => {
            el.addEventListener("click", function () {
                document.querySelectorAll(".method").forEach(m => m.classList.remove("selected"));
                this.classList.add("selected");
                document.getElementById("operateur").value = this.dataset.operateur;
            });
        });
    </script>
</body>
</html>