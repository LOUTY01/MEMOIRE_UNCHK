<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sama Santé - Votre Ticket de Consultation</title>

    <!-- Fonts & Icons (Identiques à la page rendez-vous) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Styles CSS Unifiés -->
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --blue: #1565C0;
            --blue-light: #1E88E5;
            --blue-pale: #E3F2FD;
            --accent: #29B6F6;
            --orange: #FF6D00;
            --green: #2E7D32;
            --text: #1A1A2E;
            --muted: #6B7280;
            --border: #E5E7EB;
            --bg: #F8FAFC;
            --white: #ffffff;
            --star: #FFC107;
            --radius: 12px;
        }

        body { 
            font-family: 'Inter', sans-serif; 
            color: var(--text); 
            background: var(--bg); 
            font-size: 15px; 
            line-height: 1.6; 
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* ── NAV / HEADER (Design identique) ── */
        header {
            display: flex; align-items: center; justify-content: space-between;
            padding: 14px 60px; background: var(--white);
            box-shadow: 0 1px 4px rgba(0,0,0,.06); position: sticky; top: 0; z-index: 100;
        }
        .logo { display: flex; align-items: center; gap: 10px; font-family: 'Poppins', sans-serif; font-weight: 800; font-size: 20px; color: var(--blue); margin-bottom: 0; }
        .logo h2 { font-size: 20px; font-weight: 800; margin-bottom: 0; }
        .logo span { color: var(--accent); }
        nav { display: flex; gap: 32px; list-style: none; margin-bottom: 0; padding-left: 0; }
        nav a { text-decoration: none; color: var(--text); font-size: 14px; font-weight: 500; }
        nav a.active { color: var(--blue); border-bottom: 2px solid var(--blue); padding-bottom: 2px; }
        .menu-droite { display: flex; align-items: center; gap: 16px; }
        .zone-recherche input { border: 1px solid var(--border); border-radius: 20px; padding: 6px 14px; font-size: 13px; color: var(--muted); width: 180px; }

        /* ── HERO MINI ── */
        .hero-mini {
            background: linear-gradient(135deg, var(--blue) 0%, var(--blue-light) 100%);
            color: white;
            padding: 40px 60px;
            text-align: center;
        }
        .hero-mini h1 { font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 28px; margin-bottom: 5px; }

        /* ── TICKET & QUEUE SECTION ── */
        .main-container { flex: 1; }
        .queue-section { padding: 40px 0; max-width: 900px; margin: auto; }
        .queue-inner { display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-top: 25px; }
        
        .ticket-card { 
            background: var(--white); 
            padding: 30px; 
            border-radius: var(--radius); 
            box-shadow: 0 4px 15px rgba(0,0,0,0.04); 
            text-align: center; 
            border-top: 5px solid var(--blue); 
        }
        .badge-ticket { 
            background: var(--blue-pale); 
            color: var(--blue); 
            padding: 6px 14px; 
            border-radius: 20px; 
            font-size: 12px; 
            font-weight: 600; 
            display: inline-block;
        }
        .ticket-num { font-size: 26px; font-weight: 700; margin: 20px 0; color: var(--text); font-family: 'Poppins', sans-serif; }
        .ticket-meta { font-size: 14px; color: var(--muted); }

        .queue-stats { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 20px; }
        .stat-box { background: var(--white); padding: 20px; border-radius: var(--radius); text-align: center; box-shadow: 0 2px 8px rgba(0,0,0,0.03); border: 1px solid var(--border); }
        .stat-icon { font-size: 22px; margin-bottom: 5px; }
        .stat-value { font-size: 20px; font-weight: 700; color: var(--text); }
        .stat-label { font-size: 12px; color: var(--muted); font-weight: 500; }
        
        .btn-outline-custom { 
            width: 100%; 
            background: none; 
            border: 1px solid var(--border); 
            padding: 12px; 
            border-radius: var(--radius); 
            margin-top: 15px; 
            cursor: pointer; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            gap: 8px; 
            font-size: 14px;
            font-weight: 500;
            color: var(--text);
            transition: all 0.2s ease;
        }
        .btn-outline-custom:hover {
            background-color: var(--blue-pale);
            border-color: var(--blue);
            color: var(--blue);
        }

        /* ── FOOTER (Design identique) ── */
        footer { background: #1A1A2E; color: white; padding: 40px 60px; margin-top: auto; }
        footer a { color: #fff; text-decoration: none; }
        .footer-bottom { text-align: center; padding-top: 20px; border-top: 1px solid #333; font-size: 12px; color: #9CA3AF; }

        /* Gestion de l'impression */
        @media print {
            header, footer, .hero-mini, .btn-outline-custom { display: none !important; }
            body { background: white; }
            .queue-section { max-width: 100%; padding: 0; }
            .queue-inner { grid-template-columns: 1fr; }
            .ticket-card, .stat-box { box-shadow: none; border: 1px solid #000; }
        }
        /* ── FOOTER ── */
  footer { background: var(--blue); color: white; padding: 48px 60px 32px; }
  .footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 40px; margin-bottom: 36px; }
  .footer-brand p { font-size: 13px; opacity: .75; margin-top: 10px; line-height: 1.7; max-width: 240px; }
  .footer-col h5 { font-size: 13px; font-weight: 700; margin-bottom: 14px; opacity: .9; letter-spacing: .5px; text-transform: uppercase; }
  .footer-col ul { list-style: none; display: flex; flex-direction: column; gap: 9px; }
  .footer-col ul li a { text-decoration: none; color: white; opacity: .7; font-size: 13px; transition: opacity .15s; }
  .footer-col ul li a:hover { opacity: 1; }
  .footer-contact p { font-size: 13px; opacity: .8; margin-bottom: 8px; display: flex; align-items: center; gap: 8px; }
  .social-icons { display: flex; gap: 10px; margin-top: 16px; }
  .social-icon { width: 34px; height: 34px; background: rgba(255,255,255,.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: background .15s; }
  .social-icon:hover { background: rgba(255,255,255,.3); }
  .footer-bottom { border-top: 1px solid rgba(255,255,255,.15); padding-top: 20px; text-align: center; font-size: 12px; opacity: .6; }
  .logo-white { font-family: 'Poppins', sans-serif; font-weight: 800; font-size: 22px; color: white; }
  .logo-white span { color: #90CAF9; }
  header{
height:70px;
background:white;

display:flex;

justify-content:space-between;

align-items:center;

padding:0 25px;

border-radius:15px;
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

    </style>
</head>
<body>

<!-- HEADER UNIFIÉ -->
<header>
    <div class="logo">
        <i class="fas fa-heartbeat" style="color: var(--blue); margin-right: 5px;"></i>
        <h2>Sama Santé</h2>
    </div>

    <nav>
        @auth
            <a href="{{ route('accueil.utilisateur') }}">Accueil</a>
        @else
            <a href="{{ route('accueil') }}">Accueil</a>
        @endauth

        <a class="active" href="{{ route('service') }}">Services</a>
        <a href="{{ route('propos') }}">À propos</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>

    <div class="menu-droite">
        <div class="zone-recherche">
            <input type="text" placeholder="Rechercher...">
        </div>

        <i class="fa-solid fa-bell" style="color: var(--muted); cursor:pointer;"></i>

        @auth
            <span class="fw-medium">{{ Auth::user()->nom }}</span>
            <img src="{{ Auth::user()->photo ? asset('storage/'.Auth::user()->photo) : asset('images/homme.png') }}" width="35" class="rounded-circle">
        @else
            <a href="{{ route('login') }}">
                <img src="{{ asset('images/homme.png') }}" width="35" class="rounded-circle">
            </a>
        @endauth
    </div>
</header>

<!-- HERO MINI -->
<div class="hero-mini">
    <h1>Votre Ticket de Confirmation</h1>
    <p>Présentez ce ticket ou votre numéro lors de votre arrivée</p>
</div>

<!-- CONTENU PRINCIPAL -->
<div class="container main-container">
    <section class="queue-section">
        <div class="d-flex align-items-center gap-2 mb-1">
            <div class="section-title h3 fw-bold m-0" style="font-family: 'Poppins', sans-serif;">Suivez votre position en direct</div>
        </div>
        <p class="text-muted small">Plus besoin d'attendre dans une salle bondée. Votre espace vous tient informé en temps réel.</p>

        <div class="queue-inner">
            <!-- Ticket Graphique -->
            <div class="ticket-card">
                <span class="badge-ticket">SAMA SANTÉ · TICKET</span>
                <div class="ticket-num">#{{ $paiement->reference }}</div>
                <div class="ticket-meta">
                    <div class="fw-bold text-dark fs-5 mb-1">
                        Dr. {{ $paiement->rendezVous->medecin->nom ?? 'Médecin' }}
                    </div>
                    <div class="text-muted mb-2">{{ $paiement->rendezVous->service }}</div>
                    
                    <div style="color: var(--blue); font-weight: 600;" class="fs-6 mt-3">
                        <i class="fa-regular fa-calendar-days me-1"></i>
                        {{ \Carbon\Carbon::parse($paiement->rendezVous->date)->locale('fr')->isoFormat('dddd D MMMM') }} 
                        · 
                        <i class="fa-regular fa-clock ms-2 me-1"></i>
                        {{ \Carbon\Carbon::parse($paiement->rendezVous->heure)->format('H:i') }}
                    </div>
                </div>
            </div>

            <!-- Statistiques & Informations -->
            <div>
                <div class="queue-stats">
                    <div class="stat-box">
                        <div class="stat-icon">👥</div>
                        <div class="stat-value">#{{ $paiement->rendez_vous_id }}</div>
                        <div class="stat-label">Numéro d'ordre</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-icon">⏱</div>
                        <div class="stat-value fs-6 mt-1">
                            @if($paiement->statut === 'en_attente')
                                <span class="badge bg-warning text-dark text-uppercase font-monospace" style="font-size: 11px;">En attente</span>
                            @else
                                <span class="badge bg-success text-uppercase font-monospace" style="font-size: 11px;">Validé</span>
                            @endif
                        </div>
                        <div class="stat-label mt-2">Statut paiement</div>
                    </div>
                </div>

                <div style="background: var(--white); border-radius: var(--radius); padding: 24px; box-shadow: 0 2px 8px rgba(0,0,0,.03); border: 1px solid var(--border);">
                    <div style="font-size: 14px; font-weight: 600; margin-bottom: 14px; color: var(--text);">
                        <i class="fa-solid fa-receipt me-2" style="color: var(--blue);"></i>Détails de la transaction
                    </div>
                    
                    <div class="d-flex justify-content-between mb-2 pb-2" style="border-bottom: 1px dashed var(--border);">
                        <span class="text-muted">Méthode :</span>
                        <span class="fw-semibold">{{ $paiement->operateur }}</span>
                    </div>
                    
                    <div class="d-flex justify-content-between mb-3">
                        <span class="text-muted">Montant versé :</span>
                        <span class="fw-bold" style="color: var(--green);">{{ number_format($paiement->montant, 0, ',', ' ') }} FCFA</span>
                    </div>
                    
                    <button class="btn-outline-custom" onclick="window.print()">
                        <i class="fa-solid fa-print"></i> Imprimer mon ticket
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- FOOTER UNIFIÉ -->
<<footer>
  <div class="footer-grid">
    <div class="footer-brand">
      <div class="logo-white">Sama<span>Santé</span></div>
      <p>La plateforme de santé numérique qui révolutionne l'accès aux soins médicaux au Sénégal et en Afrique de l'Ouest.</p>
    </div>
    <div class="footer-col">
      <h5>Navigation</h5>
      <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">À propos</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h5>Services</h5>
      <ul>
        <li><a href="#">Consultation générale</a></li>
        <li><a href="#">Pédiatrie</a></li>
        <li><a href="#">Cardiologie</a></li>
        <li><a href="#">Dermatologie</a></li>
        <li><a href="#">Téléconsultation</a></li>
      </ul>
    </div>
    <div class="footer-col footer-contact">
      <h5>Contact</h5>
      <p>📞 +221 77 000 00 00</p>
      <p>✉️ contact@samasante.sn</p>
      <p>📍 Dakar, Sénégal</p>
      <div class="social-icons">
        <div class="social-icon">
          <svg width="14" height="14" fill="white" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
        </div>
        <div class="social-icon">
          <svg width="14" height="14" fill="white" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path fill="#1565C0" d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line stroke="#1565C0" x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
        </div>
        <div class="social-icon">
          <svg width="14" height="14" fill="white" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg>
        </div>
        <div class="social-icon">
          <svg width="14" height="14" fill="white" viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">© 2026 SamaSanté. Tous droits réservés. · Politique de confidentialité · CGU</div>
</footer>


</body>
</html>