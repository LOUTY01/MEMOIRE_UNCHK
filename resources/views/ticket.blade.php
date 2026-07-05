<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Tickets - Sama Santé</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
    :root { 
        --blue: #1c8adb; 
        --footer-bg: #0b5ed7;
        --radius: 20px; 
    }

    body { font-family: 'Segoe UI', sans-serif; background: #f7fbff; color: #333; }
    
    /* --- NAVBAR --- */
    .navbar { background: #fff; height: 75px; box-shadow: 0 2px 15px rgba(0,0,0,.05); }
    .logo { display:flex; align-items:center; gap:8px; text-decoration:none; color:var(--blue); font-weight:700; }
    .logo-img { width:40px; height:40px; padding:6px; background:var(--blue); border-radius:10px; }

    /* --- TICKET STYLE --- */
    .queue-inner { display: grid; grid-template-columns: 1fr 1fr; gap: 30px; align-items: start; }
    .ticket-card { background: white; padding: 30px; border-radius: var(--radius); border-left: 8px solid var(--blue); box-shadow: 0 10px 25px rgba(0,0,0,0.05); }
    .badge { background: #e9f2ff; color: var(--blue); padding: 6px 15px; border-radius: 20px; font-size: 11px; margin-bottom: 15px; display: inline-block; font-weight: 700; }
    .ticket-qr { width: 80px; height: 80px; background: #eee; margin-bottom: 15px; border-radius: 10px; }
    .ticket-num { font-size: 28px; font-weight: 800; color: #333; }
    
    /* --- QUEUE STATS --- */
    .queue-stats { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 20px; }
    .stat-box { background: white; padding: 20px; border-radius: var(--radius); text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
    .stat-value { font-size: 20px; font-weight: 800; color: var(--blue); }
    .stat-label { font-size: 12px; color: #777; margin-top: 5px; }
    
    /* --- PROGRESS BAR --- */
    .progress-bar { height: 10px; background: #eee; border-radius: 10px; overflow: hidden; margin: 15px 0; }
    .progress-fill { height: 100%; width: 65%; background: var(--blue); border-radius: 10px; }
    .progress-labels { display: flex; justify-content: space-between; font-size: 12px; font-weight: 600; }

    /* --- FOOTER UNIFIÉ --- */
    footer { background: var(--footer-bg); color: #ffffff; padding: 60px 0 20px; margin-top: 60px; }
    .footer-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 40px; max-width: 1200px; margin: 0 auto; padding: 0 20px; }
    
    .footer-col h5 { font-size: 18px; margin-bottom: 25px; font-weight: 700; color: #ffffff; border-left: 3px solid #a0cfff; padding-left: 10px; }
    .footer-col ul { list-style: none; padding: 0; margin: 0; }
    .footer-col ul li { margin-bottom: 12px; }
    
    /* Force la couleur blanche des liens */
    .footer-col ul li a { 
        color: #ffffff !important; 
        text-decoration: none !important; 
        font-size: 14px; 
        opacity: 0.85; 
        transition: 0.3s;
    }
    .footer-col ul li a:hover { opacity: 1; text-decoration: underline !important; }
    
    .footer-bottom { 
        text-align: center; 
        margin-top: 50px; 
        font-size: 13px; 
        border-top: 1px solid rgba(255,255,255,0.2); 
        padding-top: 25px; 
        color: #ffffff; 
        opacity: 0.7; 
    }

    /* --- RESPONSIVE & PRINT --- */
    @media (max-width: 768px) { .queue-inner { grid-template-columns: 1fr; } }
    @media print { 
        .navbar, .no-print, footer { display: none !important; } 
        body { background: white; }
    }
</style>
</head>

<body>

    <nav class="navbar navbar-expand-lg no-print">
        <div class="container d-flex align-items-center">
            <a class="logo" href="#"><img src="{{ asset('images/logo.png') }}" class="logo-img"> Sama Santé</a>
            <a href="{{ route('accueil.utilisateur') }}" class="btn btn-outline-primary btn-sm rounded-pill ms-auto">Retour</a>
        </div>
    </nav>

    <div class="container py-5">
        <h3 class="fw-bold mb-4">Suivi de votre consultation</h3>

        @forelse($tickets as $ticket)
            <div class="queue-inner mb-5">
                <div class="ticket-card">
                    <span class="badge">SAMA SANTÉ · TICKET</span>
                    <div class="ticket-qr" style="background: #f0f0f0; border: 1px dashed #ccc;"></div>
                    <div class="ticket-num">#SAM-{{ $ticket->id }}</div>
                    <div class="mt-3">
                        <h6 class="fw-bold">Dr. {{ $ticket->medecin->prenom ?? '' }} {{ $ticket->medecin->nom ?? 'Inconnu' }}</h6>
                        <p class="text-muted small">{{ $ticket->service }}</p>
                        <p class="text-primary fw-bold">{{ $ticket->jour }} · {{ $ticket->heure }}</p>
                    </div>
                </div>

                <div>
                    <div class="queue-stats">
                        <div class="stat-box">
                            <div class="stat-value">#12</div>
                            <div class="stat-label">Position actuelle</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-value">18 min</div>
                            <div class="stat-label">Temps estimé</div>
                        </div>
                    </div>
                    <div class="stat-box">
                        <div style="font-size:13px; font-weight:600; margin-bottom:10px;">Progression de la file</div>
                        <div class="progress-bar"><div class="progress-fill"></div></div>
                        <div class="progress-labels">
                            <span>Début</span><span style="color:var(--blue);">Vous êtes là</span><span>Fin</span>
                        </div>
                    </div>
                    <button onclick="window.print()" class="btn btn-primary w-100 mt-3 rounded-pill no-print">
                        <i class="bi bi-printer"></i> Imprimer le ticket
                    </button>
                </div>
            </div>
        @empty
            <div class="text-center p-5 text-muted">Aucun ticket en cours.</div>
        @endforelse
    </div>

    <footer>
        <div class="footer-grid">
            <div class="footer-brand">
                <h4 class="text-white fw-bold">Sama<span style="color:#a0cfff">Santé</span></h4>
            </div>
            <div class="footer-col">
                <h5>Navigation</h5>
                <ul><li><a href="#">Accueil</a></li><li><a href="#">Services</a></li><li><a href="#">Rendez-vous</a></li></ul>
            </div>
            <div class="footer-col">
                <h5>Informations</h5>
                <ul><li><a href="#">À propos</a></li><li><a href="#">Contact</a></li><li><a href="#">Espace pro</a></li></ul>
            </div>
            <div class="footer-col">
                <h5>Légal</h5>
                <ul><li><a href="#">Politique confidentialité</a></li><li><a href="#">Mentions légales</a></li></ul>
            </div>
        </div>
        <div class="footer-bottom">&copy; 2026 SamaSanté. Tous droits réservés.</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>