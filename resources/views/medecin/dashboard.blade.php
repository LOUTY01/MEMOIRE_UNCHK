<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Médecin - Sama Santé</title>
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
                <span class="fw-bold">Dr. {{ Auth::user()->nom }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-sm btn-outline-danger">Déconnexion</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid admin-layout">
        <div class="sidebar d-none d-md-block">
            <h6 class="text-uppercase text-muted small fw-bold mb-3">Espace Médecin</h6>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item"><a href="#" class="nav-link active"><i class="bi bi-calendar-check me-2"></i> Mes Patients</a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-clock-history me-2"></i> Historique</a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-person-badge me-2"></i> Profil</a></li>
            </ul>
        </div>

        <main class="flex-grow-1 p-4">
            <h3 class="fw-bold mb-4">Tableau de bord Médecin</h3>

            <div class="table-container">
                <h5 class="fw-bold text-primary mb-4">Mes Patients (Paiements validés)</h5>
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Patient</th>
                            <th>Date</th>
                            <th>Heure</th>
                            <th>Montant</th>
                            <th>Référence</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($rendezvous as $rdv)
                        <tr>
                            <td>{{ $rdv->user->name ?? 'Patient anonyme' }}</td>
                            <td>{{ \Carbon\Carbon::parse($rdv->date)->format('d/m/Y') }}</td>
                            <td>{{ $rdv->heure }}</td>
                            <td><strong>{{ number_format($rdv->montant, 0, ',', ' ') }} FCFA</strong></td>
                            <td><span class="badge bg-light text-dark border">{{ $rdv->reference_ticket ?? 'N/A' }}</span></td>
                            <td><span class="text-success small fw-bold"><i class="bi bi-check-circle-fill"></i> Payé</span></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">Aucun rendez-vous payé trouvé.</td>
                        </tr>
                        @endforelse
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