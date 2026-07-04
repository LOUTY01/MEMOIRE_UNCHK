<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sama Santé – Paiement de votre consultation</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        *, *::before, *::after { 
            box-sizing: border-box; 
            margin: 0; 
            padding: 0; 
        }

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
            --radius: 12px;
        }

        body { 
            font-family: 'Inter', sans-serif; 
            color: var(--text); 
            background: var(--bg); 
            font-size: 15px; 
            line-height: 1.6; 
        }

        /* ── HEADER (Identique à Rendez-vous) ── */
        header {
            display: flex; 
            align-items: center; 
            justify-content: space-between;
            padding: 14px 60px; 
            background: var(--white);
            box-shadow: 0 1px 4px rgba(0,0,0,.06); 
            position: sticky; 
            top: 0; 
            z-index: 100;
        }
        .logo { 
            display: flex;
            align-items: center;
            gap: 10px;
            font-family: 'Poppins', sans-serif; 
            font-weight: 800; 
            font-size: 20px; 
            color: var(--blue); 
        }
        .logo i {
            font-size: 24px;
        }
        .logo h2 {
            font-size: 22px;
            color: var(--blue);
            margin: 0;
        }
        nav { 
            display: flex; 
            gap: 32px; 
        }
        nav a { 
            text-decoration: none; 
            color: var(--text); 
            font-size: 14px; 
            font-weight: 500; 
        }
        nav a.active { 
            color: var(--blue); 
            border-bottom: 2px solid var(--blue); 
            padding-bottom: 2px; 
        }
        .menu-droite { 
            display: flex; 
            align-items: center; 
            gap: 16px; 
        }
        .zone-recherche input { 
            border: 1px solid var(--border); 
            border-radius: 20px; 
            padding: 6px 14px; 
            font-size: 13px; 
            color: var(--muted); 
            width: 180px; 
            outline: none;
        }
        .menu-droite i.fa-bell {
            color: var(--muted);
            cursor: pointer;
            font-size: 18px;
        }
        .menu-droite span {
            font-weight: 500;
            font-size: 14px;
        }
        .menu-droite img {
            border-radius: 50%;
        }

        /* ── HERO ── */
        .hero {
            position: relative; 
            min-height: 200px; 
            display: flex;
            align-items: center;
            padding-left: 60px;
            background: linear-gradient(to right, rgba(227,242,253,0.95) 0%, rgba(227,242,253,0.8) 70%, transparent 100%);
        }
        .hero h1 { 
            font-family: 'Poppins', sans-serif; 
            font-size: 32px; 
            color: var(--blue); 
            margin-bottom: 4px; 
        }
        .hero p { 
            color: var(--muted); 
            font-size: 16px; 
        }

        /* ── MAIN CONTENT & CARD ── */
        .container {
            width: 90%;
            max-width: 800px;
            margin: 60px auto;
        }

        .card {
            background: var(--white);
            border-radius: var(--radius);
            padding: 40px;
            box-shadow: 0 4px 20px rgba(0,0,0,.04);
            border: 1px solid var(--border);
        }

        .card h2 {
            font-family: 'Poppins', sans-serif;
            color: var(--blue);
            margin-bottom: 30px;
            font-size: 24px;
            border-bottom: 2px solid var(--blue-pale);
            padding-bottom: 10px;
        }

        /* Summary Information Grid */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
            background: var(--bg);
            padding: 20px;
            border-radius: var(--radius);
        }

        .info {
            font-size: 15px;
        }

        .info strong {
            display: block;
            color: var(--muted);
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
        }

        .info span {
            color: var(--text);
            font-weight: 600;
        }

        /* Price Tag */
        .prix-container {
            text-align: center;
            margin: 35px 0;
            padding: 20px;
            border-top: 1px dashed var(--border);
            border-bottom: 1px dashed var(--border);
        }
        .prix-label {
            font-size: 14px;
            color: var(--muted);
            margin-bottom: 5px;
        }
        .prix {
            font-size: 36px;
            color: var(--green);
            font-weight: 700;
            font-family: 'Poppins', sans-serif;
        }

        /* Payment Methods Layout */
        .payment-title {
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--text);
        }

        .payment-methods-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 30px;
        }

        .payment-method {
            border: 2px solid var(--border);
            border-radius: var(--radius);
            padding: 20px;
            cursor: pointer;
            transition: all .2s ease;
            display: flex;
            align-items: center;
            gap: 15px;
            background: var(--white);
        }

        .payment-method:hover {
            border-color: var(--blue-light);
            background: var(--bg);
        }

        .payment-method.selected {
            border-color: var(--blue);
            background: var(--blue-pale);
        }

        .payment-method-details h3 {
            font-size: 16px;
            color: var(--text);
            margin-bottom: 2px;
        }

        .payment-method-details p {
            font-size: 13px;
            color: var(--muted);
        }

        /* Submit Button */
        .btn-pay {
            width: 100%;
            border: none;
            padding: 16px;
            background: var(--blue);
            color: white;
            font-size: 16px;
            font-weight: 600;
            border-radius: var(--radius);
            cursor: pointer;
            transition: background .2s ease;
            box-shadow: 0 4px 12px rgba(21, 101, 192, 0.2);
        }

        .btn-pay:hover {
            background: #0d47a1;
        }

        /* ── FOOTER (Identique à Rendez-vous) ── */
        footer {
            background: #111827;
            color: #9CA3AF;
            padding: 60px 60px 20px 60px;
            margin-top: 100px;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .footer-brand .logo-white {
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            font-size: 24px;
            color: var(--white);
            margin-bottom: 16px;
        }
        .footer-brand .logo-white span { color: var(--accent); }
        .footer-brand p { font-size: 14px; line-height: 1.6; }
        .footer-col h5 {
            color: var(--white);
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 20px;
        }
        .footer-col ul { list-style: none; }
        .footer-col ul li { margin-bottom: 12px; }
        .footer-col ul li a { color: #9CA3AF; text-decoration: none; font-size: 14px; transition: color 0.2s; }
        .footer-col ul li a:hover { color: var(--white); }
        .footer-contact p { font-size: 14px; margin-bottom: 12px; display: flex; align-items: center; gap: 8px; }
        .social-icons { display: flex; gap: 12px; margin-top: 20px; }
        .social-icon {
            width: 32px; height: 32px; background: #374151; border-radius: 50%;
            display: flex; align-items: center; justify-content: center; cursor: pointer; transition: background 0.2s;
        }
        .social-icon:hover { background: var(--blue); }
        .footer-bottom {
            max-width: 1200px; margin: 40px auto 0 auto; padding-top: 20px;
            border-top: 1px solid #374151; text-align: center; font-size: 13px;
        }

        @media (max-width: 768px) {
            header { padding: 14px 20px; }
            nav { display: none; }
            .hero { padding-left: 20px; }
            .footer-grid { grid-template-columns: 1fr; gap: 30px; }
            footer { padding: 40px 20px 20px 20px; }
            .payment-methods-list { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <header>
        <div class="logo">
            <i class="fas fa-heartbeat"></i>
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
                <input type="text" placeholder="Rechercher un rendez-vous...">
            </div>
            <i class="fa-solid fa-bell"></i>
            @auth
                <span>{{ Auth::user()->nom }}</span>
                <img src="{{ Auth::user()->photo ? asset('storage/'.Auth::user()->photo) : asset('images/homme.png') }}" width="35">
            @else
                <a href="{{ route('login') }}">
                    <img src="{{ asset('images/homme.png') }}" width="35">
                </a>
            @endauth
        </div>
    </header>

    <!-- HERO -->
    <div class="hero">
        <div>
            <h1>Finalisation du paiement</h1>
            <p>Sécurisé, instantané et sans frais cachés</p>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="container">
        <div class="card">
            <h2>Détails du paiement</h2>

            <!-- Grid d'informations -->
            <div class="info-grid">
                <div class="info">
                    <strong>Patient</strong>
                    <span>{{ $rdv->user->nom }}</span>
                </div>
                <div class="info">
                    <strong>Médecin</strong>
                    <span>{{ $rdv->medecin->nom }}</span>
                </div>
                <div class="info">
                    <strong>Service</strong>
                    <span>{{ $rdv->service }}</span>
                </div>
                <div class="info">
                    <strong>Date & Heure</strong>
                    <span>Le {{ $rdv->date }} à {{ $rdv->heure }}</span>
                </div>
            </div>

            <!-- Montant -->
            <div class="prix-container">
                <div class="prix-label">Montant total à régler</div>
                <div class="prix">15 500 FCFA</div>
            </div>

            <!-- Formulaire de paiement -->
            <form action="{{ route('paiement.store') }}" method="POST">
                @csrf
                <input type="hidden" name="rendez_vous_id" value="{{ $rdv->id }}">
                <input type="hidden" name="operateur" id="operateur" value="Wave">

                <div class="payment-title">Choisissez votre opérateur :</div>
                
                <div class="payment-methods-list">
                    <div class="payment-method selected" data-operateur="Wave">
                        <img src="{{ asset('images/wave.png') }}" width="40" alt="Wave">
                        <div class="payment-method-details">
                            <h3>Wave</h3>
                            <p>Payer via votre application Wave</p>
                        </div>
                    </div>

                    <div class="payment-method" data-operateur="Orange Money">
                        <img src="{{ asset('images/orange-money.png') }}" width="40" alt="Orange Money">
                        <div class="payment-method-details">
                            <h3>Orange Money</h3>
                            <p>Payer via Orange Money</p>
                        </div>
                    </div>
                </div>

                <button class="btn-pay" type="submit">
                    <i class="fa-solid fa-lock" style="margin-right: 8px;"></i> Confirmer et payer maintenant
                </button>
            </form>
        </div>
    </div>

    <!-- FOOTER -->
    <footer>
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

    <!-- SCRIPT JS -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".payment-method").forEach(function(card){
                card.addEventListener("click", function(){
                    document.querySelectorAll(".payment-method").forEach(function(c){
                        c.classList.remove("selected");
                    });
                    this.classList.add("selected");
                    document.getElementById("operateur").value = this.dataset.operateur;
                });
            });
        });
    </script>
</body>
</html>