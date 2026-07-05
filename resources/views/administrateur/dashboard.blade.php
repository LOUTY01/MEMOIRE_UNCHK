<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Sama Santé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
    /* --- DESIGN GÉNÉRAL --- */
    body { font-family: 'Segoe UI', sans-serif; background: #f7fbff; }
    .navbar { background: #fff; height: 75px; box-shadow: 0 2px 15px rgba(0,0,0,.05); }
    .logo { display:flex; align-items:center; gap:8px; text-decoration:none; color:#1c8adb; font-weight:700; }
    .logo-img { width:40px; height:40px; padding:6px; background:#1c8adb; border-radius:10px; }
    
    .admin-layout { display: flex; min-height: 80vh; }
    .sidebar { width: 260px; background: #fff; border-right: 1px solid #eef2f7; padding: 20px; }
    .nav-pills .nav-link { color: #555; margin-bottom: 10px; border-radius: 10px; }
    .nav-pills .nav-link.active { background: #1c8adb; color: white; }
    
    .table-container { background: white; padding: 25px; border-radius: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.05); }

    /* --- FOOTER OPTIMISÉ (Lisibilité Maximale) --- */
    footer { 
        background: #0b5ed7; 
        color: #ffffff; 
        padding: 60px 0 20px; 
        margin-top: 60px; 
    }

    .footer-grid { 
        display: grid; 
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); 
        gap: 40px; 
        max-width: 1200px; 
        margin: 0 auto; 
        padding: 0 20px; 
    }

    .footer-col h5 { 
        font-size: 18px; 
        margin-bottom: 25px; 
        font-weight: 700; 
        color: #ffffff;
        border-left: 3px solid #a0cfff;
        padding-left: 10px;
    }

    .footer-col ul { list-style: none; padding: 0; }
    .footer-col ul li { margin-bottom: 12px; }

    /* Liens forcés en BLANC avec bonne opacité */
    .footer-col ul li a { 
        color: #ffffff !important; 
        text-decoration: none; 
        font-size: 14px; 
        opacity: 0.9; 
        transition: 0.3s;
    }

    .footer-col ul li a:hover { 
        opacity: 1; 
        text-decoration: underline; 
    }

    .footer-bottom { 
        text-align: center; 
        margin-top: 50px; 
        font-size: 13px; 
        border-top: 1px solid rgba(255,255,255,0.2); 
        padding-top: 25px; 
        color: #ffffff;
        opacity: 0.8;
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
                <li class="nav-item"><a href="#" class="nav-link active"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-people me-2"></i> Gestion Médecins</a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-calendar-check me-2"></i> Rendez-vous</a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-gear me-2"></i> Paramètres</a></li>
            </ul>
        </div>

        <main class="flex-grow-1 p-4">
            <h3 class="fw-bold mb-4">Tableau de bord</h3>
            <div class="row g-4 mb-5">
                <div class="col-md-3"><div class="card stat-card bg-primary shadow-sm"><h6>Médecins</h6><h3>{{ $doctorCount }}</h3></div></div>
                <div class="col-md-3"><div class="card stat-card bg-success shadow-sm"><h6>Visiteurs</h6><h3>{{ $patientCount }}</h3></div></div>
                <div class="col-md-3"><div class="card stat-card bg-warning shadow-sm"><h6>Admins</h6><h3>{{ $adminCount }}</h3></div></div>
                <div class="col-md-3"><div class="card stat-card bg-info shadow-sm"><h6>Revenus</h6><h6 class="small">{{ number_format($totalRevenusPayes, 0, ',', ' ') }} FCFA</h6></div></div>
            </div>

            <div class="table-container">
                <h5 class="fw-bold mb-4">Derniers rendez-vous</h5>
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr><th>Patient</th><th>Médecin</th><th>Date</th><th class="text-end">Actions</th></tr>
                    </thead>
                    <tbody>
                        @foreach($recentAppointments as $rdv)
                        <tr>
                            <td>{{ $rdv->user->nom ?? 'N/A' }}</td>
                            <td>{{ $rdv->medecin->nom ?? 'N/A' }}</td>
                            <td>{{ $rdv->date_rdv }}</td>
                            <td class="text-end">
                                <button class="btn btn-sm btn-light text-primary"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <footer>
    <div class="footer-grid">
        <div class="footer-brand">
            <h4 class="text-white fw-bold">Sama<span style="color:#a0cfff">Santé</span></h4>
            <p style="opacity: 0.8; font-size: 14px;">La plateforme de santé numérique au Sénégal.</p>
        </div>

        <div class="footer-col">
            <h5>Navigation</h5>
            <ul>
                <li class="mb-2"><a href="#">Accueil</a></li>
                        <li class="mb-2"><a href="#">Services</a></li>
                        <li class="mb-2"><a href="#">Rendez-vous</a></li>
                        <li class="mb-2"><a href="#">À propos</a></li>
                        <li class="mb-2"><a href="#">Contact</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h5>Informations</h5>
            <ul>
                <li class="mb-2"><a href="#">Espace professionnels</a></li>
                        <li class="mb-2"><a href="#">Politique de confidentialité</a></li>
                        <li class="mb-2"><a href="#">Mentions légales</a></li>
                        <li class="mb-2"><a href="#">Plan du site</a></li>
                        <li class="mb-2"><a href="#">Politique d'annulation</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h5>Légal</h5>
            <ul>
                <li><a href="#">Politique de confidentialité</a></li>
                <li><a href="#">Mentions légales</a></li>
                <li><a href="#">Plan du site</a></li>
                <li><a href="#">Politique d'annulation</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; 2026 SamaSanté. Tous droits réservés.
    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>