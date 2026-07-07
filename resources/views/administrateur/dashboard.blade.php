<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Sama Santé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
    body { font-family: 'Segoe UI', sans-serif; background: #f7fbff; }
    .navbar { background: #fff; height: 75px; box-shadow: 0 2px 15px rgba(0,0,0,.05); }
    .logo { display:flex; align-items:center; gap:8px; text-decoration:none; color:#1c8adb; font-weight:700; }
    .logo-img { width:40px; height:40px; padding:6px; background:#1c8adb; border-radius:10px; }
    
    .admin-layout { display: flex; min-height: 80vh; }
    .sidebar { width: 260px; background: #fff; border-right: 1px solid #eef2f7; padding: 20px; }
    .nav-pills .nav-link { color: #555; margin-bottom: 10px; border-radius: 10px; }
    .nav-pills .nav-link.active { background: #1c8adb; color: white; }
    
    .table-container { background: white; padding: 25px; border-radius: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.05); }

    /* --- FOOTER AMÉLIORÉ POUR UNE LISIBILITÉ MAXIMALE --- */
/* --- FOOTER : CONTRÔLE DE LISIBILITÉ TOTAL --- */
footer { 
    background: #0d6efd; 
    color: #ffffff; 
    padding: 60px 0 20px; 
    margin-top: 60px; 
}

/* Ajout d'une ombre légère sur tout le texte du footer pour le détacher du fond */
footer, footer a, footer h5 {
    text-shadow: 0px 1px 2px rgba(0,0,0,0.2); 
}

.footer-col h5 { 
    font-size: 20px; 
    margin-bottom: 25px; 
    font-weight: 900; /* Très gras */
    color: #ffffff;
    border-left: 4px solid #ffffff; /* Bordure blanche simple */
    padding-left: 12px;
}

.footer-col ul li a { 
    color: #ffffff !important; 
    text-decoration: none; 
    font-size: 16px; /* Taille plus confortable */
    font-weight: 600; /* Plus épais pour éviter le flou */
    opacity: 1; /* Opacité 1 pour un blanc pur */
    transition: 0.3s;
}

.footer-col ul li a:hover { 
    color: #ffffff !important; 
    background: rgba(255,255,255,0.1); /* Petit fond léger au survol */
    padding: 2px 10px;
    border-radius: 4px;
}
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container d-flex align-items-center">
            <a class="logo me-4" href="#"><img src="{{ asset('images/logo.png') }}" class="logo-img"> Sama Santé</a>
            <div class="d-flex align-items-center ms-auto gap-3">
                <span class="fw-bold">Admin: {{ Auth::user()->nom }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-sm btn-outline-danger">Déconnexion</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid admin-layout">
        <div class="sidebar d-none d-md-block">
            <h6 class="text-uppercase text-muted small fw-bold mb-3">Administration</h6>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="nav-link active"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a></li>
                <li class="nav-item"><a href="{{ route('admin.medecins') }}" class="nav-link"><i class="bi bi-people me-2"></i> Gestion Médecins</a></li>
                <li class="nav-item"><a href="{{ route('admin.patients') }}" class="nav-link"><i class="bi bi-person me-2"></i> Gestion Patient</a></li>
                <li class="nav-item"><a href="{{ route('admin.rendezvous') }}" class="nav-link"><i class="bi bi-calendar-check me-2"></i> Rendez-vous</a></li>
                <li class="nav-item"><a href="{{ route('admin.tickets') }}" class="nav-link"><i class="bi bi-ticket-perforated me-2"></i> Tickets</a></li>
            </ul>
        </div>

        <main class="flex-grow-1 p-4">
            <h3 class="fw-bold mb-4">Tableau de bord</h3>
            <div class="row g-4 mb-5">
                <div class="col-md-3"><div class="card stat-card bg-primary text-white p-3 shadow-sm"><h6>Médecins</h6><h3>{{ $doctorCount }}</h3></div></div>
                <div class="col-md-3"><div class="card stat-card bg-success text-white p-3 shadow-sm"><h6>Visiteurs</h6><h3>{{ $patientCount }}</h3></div></div>
                <div class="col-md-3"><div class="card stat-card bg-warning text-white p-3 shadow-sm"><h6>Admins</h6><h3>{{ $adminCount }}</h3></div></div>
                <div class="col-md-3"><div class="card stat-card bg-info text-white p-3 shadow-sm"><h6>Revenus</h6><h6>{{ number_format($totalRevenusPayes, 0, ',', ' ') }} FCFA</h6></div></div>
            </div>

            <!-- Nouvelle section : Activité Récente -->
            <div class="table-container">
                <h5 class="fw-bold mb-4"><i class="bi bi-clock-history me-2"></i>Inscriptions Récentes</h5>
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr><th>Utilisateur</th><th>Rôle</th><th>Date d'inscription</th></tr>
                    </thead>
                    <tbody>
                        @foreach($recentUsers as $user)
                        <tr>
                            <td>{{ $user->nom }}</td>
                            <td><span class="badge bg-secondary">{{ $user->role }}</span></td>
                            <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <footer class="footer pt-5 pb-3 mt-5 bg-primary text-white">
    <div class="container">
        <div class="row g-4 mb-4">
            <!-- Sama Santé -->
            <div class="col-md-4">
                <h5 class="fw-bold mb-3 text-warning"><i class="bi bi-heart-pulse-fill"></i> Sama Santé</h5>
                <p>Sama Santé est une plateforme de gestion de santé qui met en relation professionnels de santé et patients en un clic.</p>
            </div>

            <!-- Navigation -->
            <div class="col-md-2">
                <h6 class="fw-bold mb-3 border-bottom border-warning pb-2 d-inline-block">Navigation</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none footer-link">Accueil</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none footer-link">Services</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none footer-link">Rendez-vous</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none footer-link">À propos</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none footer-link">Contact</a></li>
                </ul>
            </div>

            <!-- Ressources -->
            <div class="col-md-3">
                <h6 class="fw-bold mb-3 border-bottom border-warning pb-2 d-inline-block">Ressources</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none footer-link">Espace professionnels</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none footer-link">Politique de confidentialité</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none footer-link">Mentions légales</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none footer-link">Plan du site</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none footer-link">Politique d'annulation</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="col-md-3">
                <h6 class="fw-bold mb-3 border-bottom border-warning pb-2 d-inline-block">Contact</h6>
                <ul class="list-unstyled mb-3">
                    <li class="mb-2"><i class="bi bi-telephone me-2"></i> +221 77 123 45 67</li>
                    <li class="mb-2"><i class="bi bi-envelope me-2"></i> contact@samasante.sn</li>
                    <li class="mb-2"><i class="bi bi-geo-alt me-2"></i> Dakar, Sénégal</li>
                </ul>
            </div>
        </div>
    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>