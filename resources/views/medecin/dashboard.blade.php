<?php
// Données statiques - Spécialités
$specialites = [
    ["nom" => "Toutes spécialités", "value" => ""],
    ["nom" => "Cardiologie", "value" => "cardiologie"],
    ["nom" => "Gynécologie", "value" => "gynecologie"],
    ["nom" => "Pédiatrie", "value" => "pediatrie"],
    ["nom" => "Rhumatologie", "value" => "rhumatologie"],
    ["nom" => "Neurologie", "value" => "neurologie"],
    ["nom" => "Orthopédie", "value" => "orthopedie"],
    ["nom" => "Gastro-entérologie", "value" => "gastro"],
    ["nom" => "Dermatologie", "value" => "dermatologie"],
    ["nom" => "Ophtalmologie", "value" => "ophtalmologie"],
    ["nom" => "ORL", "value" => "orl"],
    ["nom" => "Psychiatrie", "value" => "psychiatrie"],
    ["nom" => "Urologie", "value" => "urologie"],
];

// Données statiques - Villes du Sénégal
$villes = [
    ["nom" => "Dakar", "value" => "dakar"],
    ["nom" => "Thiès", "value" => "thies"],
    ["nom" => "Saint-Louis", "value" => "saint-louis"],
    ["nom" => "Ziguinchor", "value" => "ziguinchor"],
    ["nom" => "Kaolack", "value" => "kaolack"],
    ["nom" => "Mbour", "value" => "mbour"],
    ["nom" => "Rufisque", "value" => "rufisque"],
    ["nom" => "Diourbel", "value" => "diourbel"],
    ["nom" => "Tambacounda", "value" => "tambacounda"],
    ["nom" => "Kolda", "value" => "kolda"],
];

// Spécialités populaires avec icônes Bootstrap Icons
$specialites_populaires = [
    ["nom" => "Cardiologie",       "icone" => "bi-heart-pulse-fill",   "medecins" => 24, "couleur" => "#E8F4FD", "icone_color" => "#2196F3"],
    ["nom" => "Gynécologie",       "icone" => "bi-gender-female",       "medecins" => 18, "couleur" => "#FCE4EC", "icone_color" => "#E91E63"],
    ["nom" => "Pédiatrie",         "icone" => "bi-emoji-smile-fill",    "medecins" => 31, "couleur" => "#E8F5E9", "icone_color" => "#4CAF50"],
    ["nom" => "Rhumatologie",      "icone" => "bi-person-arms-up",      "medecins" => 12, "couleur" => "#FFF3E0", "icone_color" => "#FF9800"],
    ["nom" => "Neurologie",        "icone" => "bi-cpu-fill",            "medecins" => 15, "couleur" => "#EDE7F6", "icone_color" => "#9C27B0"],
    ["nom" => "Orthopédie",        "icone" => "bi-bandaid-fill",        "medecins" => 20, "couleur" => "#E3F2FD", "icone_color" => "#1565C0"],
    ["nom" => "Gastro-entérologie","icone" => "bi-activity",            "medecins" => 10, "couleur" => "#FFF9C4", "icone_color" => "#F9A825"],
    ["nom" => "Dermatologie",      "icone" => "bi-shield-plus-fill",    "medecins" => 22, "couleur" => "#FCE4EC", "icone_color" => "#C62828"],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sama Santé - Des médecins qualifiés à portée de clic</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-blue: #007bff;
            --light-blue: #e9f2ff;
            --dark-blue: #0056b3;
            --bg-color: #f4f9ff;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            background: linear-gradient(to bottom, rgba(146,214,255,0.2), rgba(255,255,255,0.2));
        }

        .text-primary { color: var(--primary-blue) !important; }
        .bg-primary { background-color: var(--primary-blue) !important; }
        .bg-light-blue { background-color: var(--light-blue) !important; }

        /* Navbar Custom */
        .navbar { background-color: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); }

        /* Custom Shapes & Backgrounds */
        .hero-contact {
            background-image: url('images/ban.jpg');
            background-repeat: no-repeat;
            position: relative;
            height: 200vh;
            width: 100%;
        }
        
        .hero-section {
            background-image: url('images/ban.jpeg');
            background-size: cover;
            background-position: center;
            padding: 120px 0;
            border-bottom-right-radius: 170px;
            position: relative;
            margin-bottom: 100px;
            padding-top: 50px;
            padding-left: -180px;
        }
        .hero-content {
            background: rgba(255, 255, 255, 0.8 );
            padding: 100px;
            border-radius: 20px;
            max-width: 600px;
            margin-bottom: 100px;
            margin-top: 80px;
            margin-left: -130px;
        }
        
        .search-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
            padding: 28px 32px;
        }

        .search-field-label {
            font-size: 0.82rem;
            font-weight: 600;
            color: #374151;
            margin-bottom: 8px;
            display: block;
        }

        .search-input-wrapper,
        .specialite-wrapper,
        .select-wrapper { position: relative; }

        .icon-left {
            position: absolute;
            left: 14px; top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            pointer-events: none;
        }

        .icon-right {
            position: absolute;
            right: 14px; top: 50%;
            transform: translateY(-50%);
            color: #6b7280;
            pointer-events: none;
        }

        .search-input,
        .specialite-input,
        .search-select {
            border: 1.5px solid #e5e7eb;
            border-radius: 10px;
            padding: 12px 16px 12px 40px;
            font-size: 0.92rem;
            background: #f9fafb;
            width: 100%;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
            appearance: none;
        }

        .search-input:focus,
        .specialite-input:focus,
        .search-select:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.12);
            background: #fff;
        }

        .btn-rechercher {
            background: #2563eb;
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 12px 28px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: background 0.2s;
        }

        .btn-rechercher:hover {
             background: #1d4ed8; 
        }

        .section-title {
            font-size: 2rem;
            font-weight: 800;
            color: #0f172a;
        }

        .section-subtitle {
            font-size: 0.95rem;
            color: #6b7280;
        }

        .voir-tout {
            font-size: 0.92rem;
            font-weight: 700;
            color: #1d4ed8;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 4px;
        }
        .voir-tout:hover { color: #1e40af; }

        /* Carte Specialty */
        .specialty-card {
            background: #fff;
            border: 1.5px solid #e5e7eb;
            border-radius: 14px;
            padding: 24px 16px 20px;
            text-align: center;
            cursor: pointer;
            transition: box-shadow 0.2s, border-color 0.2s, transform 0.15s;
            height: 100%;
        }
        .specialty-card:hover {
            box-shadow: 0 6px 24px rgba(37, 99, 235, 0.12);
            border-color: #93c5fd;
            transform: translateY(-3px);
        }

        /* Icônes Cercles */
        .icon-circle {
            width: 56px; height: 56px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 18px;
            font-size: 1.5rem;
        }
        .icon-blue   { background: #eff6ff; color: #2563eb; }
        .icon-cyan   { background: #e0f2fe; color: #0284c7; }
        .icon-orange { background: #fff7ed; color: #ea580c; }
        .icon-teal   { background: #f0fdfa; color: #0d9488; }
        .icon-purple { background: #f5f3ff; color: #7c3aed; }
        .icon-green  { background: #f0fdf4; color: #16a34a; }
        .icon-pink   { background: #fdf2f8; color: #db2777; }
        .icon-indigo { background: #eef2ff; color: #4338ca; }

        .specialty-name {
            font-size: 0.92rem;
            font-weight: 700;
            color: #111827;
            margin-bottom: 4px;
        }
        .specialty-count {
            font-size: 0.82rem;
            color: #9ca3af;
            margin: 0;
        }

        /* Doctor Cards */
        .doctor-card {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 2px 12px rgba(0,0,0,0.07);
            transition: transform 0.2s, box-shadow 0.2s;
            height: 100%;
        }
        .doctor-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 32px rgba(37,99,235,0.13);
        }
        .card-img-wrap { position: relative; height: 240px; overflow: hidden; }
        .card-img-wrap img { width: 100%; height: 100%; object-fit: cover; }

        .btn-fav {
            position: absolute; top: 14px; right: 14px;
            width: 36px; height: 36px; background: #fff;
            border: none; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15); cursor: pointer;
        }
        .btn-fav i { color: #ef4444; }

        .card-body-custom { padding: 18px 20px 20px; }
        .doctor-name { font-size: 1rem; font-weight: 700; color: #0f172a; margin: 0; }
        .doctor-specialty { font-size: 0.88rem; font-weight: 600; margin: 2px 0 12px; }
        .spec-blue { color: #2563eb; }

        .rating { display: flex; align-items: center; gap: 4px; font-weight: 700; color: #f59e0b; }

        .info-list { list-style: none; padding: 0; margin: 0 0 16px; display: flex; flex-direction: column; gap: 6px; }
        .info-list li { display: flex; align-items: center; gap: 8px; font-size: 0.85rem; color: #4b5563; }
        .info-list li i { color: #9ca3af; }
        .dispo { color: #16a34a !important; font-weight: 600; }
        .dispo-demain { color: #d97706 !important; font-weight: 600; }

        .card-footer-custom {
            display: flex; align-items: flex-end; justify-content: space-between;
            border-top: 1px solid #f1f5f9; padding-top: 14px;
        }
        .price-label { font-size: 0.78rem; color: #9ca3af; margin-bottom: 2px; }
        .price-amount { font-size: 1.15rem; font-weight: 800; color: #0f172a; }

        .btn-go {
            width: 40px; height: 40px; background: #2563eb;
            border: none; border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            cursor: pointer; transition: background 0.2s;
        }
        .btn-go i { color: #fff; font-size: 1.1rem; }
        .btn-go:hover { background: #1d4ed8; }

        /* Toggle filtre */
        .filter-toggle { display: flex; background: #fff; border-radius: 50px; padding: 4px; box-shadow: 0 1px 4px rgba(0,0,0,0.1); }
        .filter-toggle button { border: none; border-radius: 50px; padding: 8px 22px; font-weight: 600; cursor: pointer; }
        .filter-toggle .active { background: #2563eb; color: #fff; }
        .filter-toggle .inactive { background: transparent; color: #374151; }

        /* Footer */
        .footer { background-color: #0b5ed7; color: white; }
        .footer a { color: rgba(255,255,255,0.8); text-decoration: none; }
        .footer a:hover { color: white; text-decoration: underline; }

        .why-title {
            font-size: 2.2rem;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 12px;
        }
        .why-subtitle {
            font-size: 0.97rem;
            color: #6b7280;
            max-width: 480px;
            margin: 0 auto;
            line-height: 1.6;
        }
        .why-card {
            background: #fff;
            border: 1.5px solid #e5e7eb;
            border-radius: 16px;
            padding: 32px 24px 28px;
            height: 100%;
            transition: box-shadow 0.2s, transform 0.2s;
        }
        .why-card:hover {
            box-shadow: 0 8px 28px rgba(37, 99, 235, 0.1);
            transform: translateY(-3px);
        }
        .why-icon {
            width: 58px; height: 58px;
            border-radius: 14px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 24px;
        }

        .icon-wrapper {
            width: 75px;
            height: 75px;
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            color: #64748b;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            transition: all 0.3s ease;
        }

        .step-item:hover .icon-wrapper {
            border-color: #007bff;
            color: #007bff;
            transform: translateY(-3px);
        }

        .icon-wrapper.active-step {
            background: linear-gradient(135deg, #e0f2fe 0%, #f0fdf4 100%);
            border-color: #007bff;
            color: #007bff;
        }

        .step-item p {
            font-size: 0.825rem;
            line-height: 1.4;
        }
        .stats-custom-section {
            background-color: #007bff; 
        }

        .stat-box h2 {
            font-family: 'Poppins', sans-serif;
            letter-spacing: -1px;
        }

        .stat-description {
            color: rgba(255, 255, 255, 0.75);
            font-size: 0.95rem;
            font-weight: 500;
        }

        .stat-box {
            transition: transform 0.3s ease;
        }
        .stat-box:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">
                <i class="bi bi-heart-pulse-fill"></i> Sama Santé
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">À propos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Rendez-vous</a></li>
                    <li class="nav-item"><a class="nav-link active text-primary fw-bold" href="#">Contact</a></li>
                </ul>
                <div class="d-flex align-items-center">
                    <div class="input-group me-3">
                        <input type="text" id="inputNom" class="form-control rounded-pill bg-light border-0" placeholder="Rechercher un médecin...">
                        <button id="btnSearch" class="btn btn-light rounded-pill border-0 position-absolute inset-e-0 z-3"><i class="bi bi-search"></i></button>
                    </div>
                    <span class="me-2 fw-bold">FR</span>
                    <img src="{{ asset('images/homme.png') }}" class="rounded-circle" alt="User" width="40" height="30">
                </div>
            </div>
        </div>
    </nav>

    <section class="hero-section" id="search">
        <div class="container">
            <div class="hero-content">
                <h1 class="fw-bold mb-3"> Des médecins qualifiés <br> <span style="color: #007bff;">à portée de clic</span> </h1>
                <p class="mb-4 text-muted">Besoin d'aide pour une consultation, un paiement ou une question médicale ? Notre équipe sénégalaise est là pour vous accompagner 24h/24.</p>
                <div class="btona" style="display: flex; gap: 15px; width: 100%; height: 10%;">
                    <a href="#" id="btnVoirSpecs" class="btn btn-primary btn-lg rounded-pill ">Trouver un médecin</a>
                    <a href="#" id="btnVoirTout" class="btn btn-outline-primary btn-lg rounded-pill ">Découvrir les spécialités</a>
                </div>
            </div>
        </div>
    </section>

    <div class="container mb-5">
        <div class="search-card">
          <div class="row g-3 align-items-end">
            {{-- Nom du médecin --}}
            <div class="col-12 col-md-3">
              <label class="search-field-label">Nom du médecin</label>
              <div class="search-input-wrapper">
                <i class="bi bi-search icon-left"></i>
                <input type="text" class="search-input" placeholder="Dr. Dupont...">
              </div>
            </div>

            {{-- Spécialité --}}
            <div class="col-12 col-md-4">
              <label class="search-field-label">Spécialité</label>
              <div class="specialite-wrapper">
                <i class="bi bi-heart-pulse icon-left"></i>
                <select id="selectSpec" class="search-select">
                    @foreach($specialites as $sp)
                        <option value="{{ $sp['value'] }}">{{ $sp['nom'] }}</option>
                    @endforeach
                </select>
              </div>
            </div>

            {{-- Ville --}}
            <div class="col-12 col-md-3">
              <label class="search-field-label">Ville</label>
              <div class="select-wrapper">
                <i class="bi bi-geo-alt icon-left"></i>
                <i class="bi bi-chevron-down icon-right"></i>
                <select id="selectVille" class="search-select">
                  @foreach($villes as $v)
                    <option value="{{ $v['value'] }}">{{ $v['nom'] }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            {{-- Bouton --}}
            <div class="col-12 col-md-2 d-flex align-items-end">
              <button class="btn-rechercher w-100">
                Rechercher <i class="bi bi-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>
    </div>

    <section class="py-5 px-3" id="specialites">
      <div class="container">
          <div class="d-flex justify-content-between align-items-start mb-2">
            <div>
              <h2 class="section-title">Spécialités Populaires</h2>
              <p class="section-subtitle">Explorez les domaines médicaux les plus consultés</p>
               <a href="#" class="voir-tout mt-1">Voir tout <i class="bi bi-chevron-right"></i></a>
            </div>
          </div>

          <hr class="my-4">

          <div class="row g-3">
            @foreach([
              ['nom' => 'Cardiologie',    'count' => 45,  'icon' => 'bi-heart',             'color' => 'icon-blue'],
              ['nom' => 'Dentisterie',    'count' => 32,  'icon' => 'bi-tooth',             'color' => 'icon-cyan'],
              ['nom' => 'Pédiatrie',      'count' => 28,  'icon' => 'bi-emoji-smile',       'color' => 'icon-orange'],
              ['nom' => 'Ophtalmologie',  'count' => 21,  'icon' => 'bi-eye',               'color' => 'icon-teal'],
              ['nom' => 'Neurologie',     'count' => 18,  'icon' => 'bi-brain',             'color' => 'icon-purple'],
              ['nom' => 'Orthopédie',     'count' => 24,  'icon' => 'bi-check2',            'color' => 'icon-green'],
              ['nom' => 'Gynécologie',    'count' => 35,  'icon' => 'bi-gender-female',     'color' => 'icon-pink'],
              ['nom' => 'Générale',       'count' => 112, 'icon' => 'bi-clipboard2-pulse',  'color' => 'icon-indigo'],
            ] as $spec)
            <div class="col-6 col-sm-4 col-md-3 col-lg" onclick="choisirSpecialite(this)" data-spec="{{ strtolower($spec['nom']) }}">
              <div class="specialty-card">
                <div class="icon-circle {{ $spec['color'] }}">
                  <i class="bi {{ $spec['icon'] }}"></i>
                </div>
                <h6 class="specialty-name">{{ $spec['nom'] }}</h6>
                <p class="specialty-count">{{ $spec['count'] }} Médecins</p>
              </div>
            </div>
            @endforeach
          </div>
      </div>
    </section>

    <section class="py-5 px-3" id="medecins">
      <div class="container">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
              <h2 class="section-title">Médecins Recommandés</h2>
              <p class="section-subtitle">Sélectionnés pour leur excellence et la satisfaction des patients</p>
            </div>
            <div class="filter-toggle">
              <button class="active" onclick="filterDoctors(this)">Près de moi</button>
              <button class="inactive" onclick="filterDoctors(this)">Tous</button>
            </div>
          </div>

          <div class="row g-4">
            {{-- Médecin 1 (Image: 3.jpeg) --}}
            <div class="col-12 col-md-4">
              <div class="doctor-card">
                <div class="card-img-wrap">
                  <img src="{{ asset('images/3.jpeg') }}" alt="Dr. A. Ndiaye" onerror="this.src='https://ui-avatars.com/api/?name=Dr+A+Ndiaye&background=2563eb&color=fff&size=300'">
                  <button class="btn-fav"><i class="bi bi-heart-fill"></i></button>
                </div>
                <div class="card-body-custom">
                  <div class="d-flex justify-content-between align-items-start">
                    <div>
                      <p class="doctor-name">Dr. A. Ndiaye</p>
                      <p class="doctor-specialty spec-blue">Pédiatre / Généraliste</p>
                    </div>
                    <div class="rating"><i class="bi bi-star-fill"></i> 4.9</div>
                  </div>
                  <ul class="info-list">
                    <li><i class="bi bi-building"></i> Clinique de Dakar</li>
                    <li><i class="bi bi-calendar3"></i> <span class="dispo">Disponible aujourd'hui</span></li>
                  </ul>
                  <div class="card-footer-custom">
                    <div>
                      <p class="price-label">Consultation à partir de</p>
                      <p class="price-amount">15 000 FCFA</p>
                    </div>
                    <button class="btn-go" onclick="prendreRdv('Dr. A. Ndiaye', true)">
                      <i class="bi bi-arrow-right"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            {{-- Médecin 2 (Image: m1.jpeg) --}}
            <div class="col-12 col-md-4">
              <div class="doctor-card">
                <div class="card-img-wrap">
                  <img src="{{ asset('images/m1.jpeg') }}" alt="Dr. Jean Dupont" onerror="this.src='https://ui-avatars.com/api/?name=Dr+Jean+Dupont&background=2563eb&color=fff&size=300'">
                  <button class="btn-fav"><i class="bi bi-heart-fill"></i></button>
                </div>
                <div class="card-body-custom">
                  <div class="d-flex justify-content-between align-items-start">
                    <div>
                      <p class="doctor-name">Dr. Jean Dupont</p>
                      <p class="doctor-specialty spec-blue">Généraliste</p>
                    </div>
                    <div class="rating"><i class="bi bi-star-fill"></i> 4.8</div>
                  </div>
                  <ul class="info-list">
                    <li><i class="bi bi-building"></i> Centre Médical Centre-Ville</li>
                    <li><i class="bi bi-calendar3"></i> <span class="dispo">Disponible aujourd'hui</span></li>
                  </ul>
                  <div class="card-footer-custom">
                    <div>
                      <p class="price-label">Consultation à partir de</p>
                      <p class="price-amount">12 000 FCFA</p>
                    </div>
                    <button class="btn-go" onclick="prendreRdv('Dr. Jean Dupont', true)">
                      <i class="bi bi-arrow-right"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            {{-- Médecin 3 (Image: m2.jpeg) --}}
            <div class="col-12 col-md-4">
              <div class="doctor-card">
                <div class="card-img-wrap">
                  <img src="{{ asset('images/m2.jpeg') }}" alt="Dr. Moussa Traoré" onerror="this.src='https://ui-avatars.com/api/?name=Dr+Moussa+Traore&background=2563eb&color=fff&size=300'">
                  <button class="btn-fav"><i class="bi bi-heart-fill"></i></button>
                </div>
                <div class="card-body-custom">
                  <div class="d-flex justify-content-between align-items-start">
                    <div>
                      <p class="doctor-name">Dr. Moussa Traoré</p>
                      <p class="doctor-specialty spec-blue">Orthopédiste</p>
                    </div>
                    <div class="rating"><i class="bi bi-star-fill"></i> 5.0</div>
                  </div>
                  <ul class="info-list">
                    <li><i class="bi bi-building"></i> Hôpital Principal</li>
                    <li><i class="bi bi-calendar3"></i> <span class="dispo-demain">Disponible demain</span></li>
                  </ul>
                  <div class="card-footer-custom">
                    <div>
                      <p class="price-label">Consultation à partir de</p>
                      <p class="price-amount">20 000 FCFA</p>
                    </div>
                    <button class="btn-go" onclick="prendreRdv('Dr. Moussa Traoré', true)">
                      <i class="bi bi-arrow-right"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <section class="py-5 px-3">
      <div class="container">
          <div class="text-center mb-5">
            <h2 class="why-title">Pourquoi choisir Sama Santé ?</h2>
            <p class="why-subtitle">Une plateforme pensée pour simplifier la relation entre médecins et patients au Sénégal.</p>
          </div>

          <div class="row g-4">
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="why-card">
                <div class="why-icon icon-blue"><i class="bi bi-shield-check"></i></div>
                <h6 class="why-card-title">Médecins certifiés</h6>
                <p class="why-card-text">Tous nos praticiens sont rigoureusement vérifiés par nos équipes.</p>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="why-card">
                <div class="why-icon icon-cyan"><i class="bi bi-lightning-charge"></i></div>
                <h6 class="why-card-title">Rendez-vous rapides</h6>
                <p class="why-card-text">Obtenez une consultation en moins de 24 heures en moyenne.</p>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="why-card">
                <div class="why-icon icon-orange"><i class="bi bi-shield-fill-exclamation"></i></div>
                <h6 class="why-card-title">Paiement sécurisé</h6>
                <p class="why-card-text">Payez vos consultations via Wave, Orange Money ou CB en toute sécurité.</p>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="why-card">
                <div class="why-icon icon-indigo"><i class="bi bi-bar-chart-line"></i></div>
                <h6 class="why-card-title">Suivi personnalisé</h6>
                <p class="why-card-text">Accédez à votre historique médical et vos prescriptions en un clic.</p>
              </div>
            </div>
          </div>
      </div>
    </section>

    <section class="how-it-works-section py-5 bg-white">
        <div class="container text-center">
            <span class="text-primary fw-bold text-uppercase tracking-wider small d-block mb-2" style="letter-spacing: 1px;">Procédure</span>
            <h2 class="fw-bold text-dark mb-2">Comment ça marche ?</h2>
            <p class="text-muted mx-auto mb-5" style="max-width: 600px;">Suivez ces étapes simples pour trouver un médecin et réserver votre consultation en quelques minutes seulement.</p>
            
            <div class="row g-4 justify-content-center mt-2">
                <div class="col-md-2 col-sm-6">
                    <div class="step-item text-center">
                        <div class="icon-wrapper mx-auto position-relative mb-3"><i class="bi bi-search"></i></div>
                        <h6 class="fw-bold text-dark mb-1">Rechercher</h6>
                        <p class="text-muted small px-2">Trouvez votre docteur idéal</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="step-item text-center">
                        <div class="icon-wrapper mx-auto position-relative mb-3"><i class="bi bi-person-check"></i></div>
                        <h6 class="fw-bold text-dark mb-1">Choisir</h6>
                        <p class="text-muted small px-2">Sélectionnez le bon profil</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="step-item text-center">
                        <div class="icon-wrapper mx-auto position-relative mb-3 active-step shadow-sm"><i class="bi bi-calendar-event"></i></div>
                        <h6 class="fw-bold text-primary mb-1">Réserver</h6>
                        <p class="text-muted small px-2">Choisissez la date & l'heure</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="step-item text-center">
                        <div class="icon-wrapper mx-auto position-relative mb-3"><i class="bi bi-credit-card"></i></div>
                        <h6 class="fw-bold text-dark mb-1">Payer</h6>
                        <p class="text-muted small px-2">Validation 100% sécurisée</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="step-item text-center">
                        <div class="icon-wrapper mx-auto position-relative mb-3"><i class="bi bi-chat-heart"></i></div>
                        <h6 class="fw-bold text-dark mb-1">Consulter</h6>
                        <p class="text-muted small px-2">Votre rendez-vous honoré</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="stats-custom-section py-5 shadow-sm">
        <div class="container text-center py-2">
            <div class="row g-4 justify-content-center">
                <div class="col-md-3 col-sm-6">
                    <div class="stat-box">
                        <h2 class="display-5 fw-bold text-white mb-1">500+</h2>
                        <p class="stat-description mb-0">Médecins Inscrits</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="stat-box">
                        <h2 class="display-5 fw-bold text-white mb-1">25+</h2>
                        <p class="stat-description mb-0">Spécialités</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="stat-box">
                        <h2 class="display-5 fw-bold text-white mb-1">15k</h2>
                        <p class="stat-description mb-0">Patients Heureux</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="stat-box">
                        <h2 class="display-5 fw-bold text-white mb-1">98%</h2>
                        <p class="stat-description mb-0">Satisfaction Client</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
         
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
                        <li class="mb-2"><i class="bi bi-telephone me-2"></i> +221 78 036 25 07</li>
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
            <div class="text-center pt-3 border-top border-light border-opacity-25 small d-flex justify-content-between align-items-center flex-wrap gap-2">
                <p class="mb-0">&copy; 2026 Sama Santé. Tous droits réservés.</p>
                <a href="#" class="btn btn-sm btn-light text-primary rounded-pill px-3 fw-bold shadow-sm">
                    <i class="bi bi-person-badge-fill me-1"></i> Espace Médecins
                </a>
            </div>
        </div>
    </footer>

    <div id="toastNotif" class="toast align-items-center text-bg-primary border-0 position-fixed bottom-0 end-0 m-3 hstack gap-2 p-3 z-3" role="alert" aria-live="assertive" aria-atomic="true" style="transition: opacity 0.3s ease; min-width: 250px;">
      <i id="toastIcon" class="bi bi-info-circle-fill"></i>
      <div class="toast-body" id="toastMsg"></div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        /* ===== TOAST ===== */
        function showToast(msg, type = 'success') {
            const toast  = document.getElementById('toastNotif');
            const msgEl  = document.getElementById('toastMsg');
            const iconEl = document.getElementById('toastIcon');
            if(!toast || !msgEl) return;
            
            msgEl.textContent = msg;
            const config = {
                success: { border: '#007bff', icon: 'bi-check-circle-fill', color: '#007bff' },
                warning: { border: '#F59E0B', icon: 'bi-exclamation-triangle-fill', color: '#F59E0B' },
                error:   { border: '#EF5350', icon: 'bi-x-circle-fill', color: '#EF5350' },
            };
            const cfg = config[type] || config.success;
            toast.style.borderLeft = `5px solid ${cfg.border}`;
            iconEl.className = `bi ${cfg.icon}`;
            iconEl.style.color = cfg.color;
            
            const bsToast = new bootstrap.Toast(toast);
            bsToast.show();
        }

        /* ===== FILTRE MÉDECINS ===== */
        function filterDoctors(btn) {
            document.querySelectorAll('.filter-toggle button').forEach(b => b.className = 'inactive');
            btn.className = 'active';
            showToast(`Filtre appliqué : ${btn.textContent}`);
        }

        /* ===== RECHERCHE ===== */
        document.getElementById('btnSearch')?.addEventListener('click', function () {
            const nom   = document.getElementById('inputNom')?.value.trim();
            const spec  = document.getElementById('selectSpec')?.value;
            const ville = document.getElementById('selectVille')?.value;

            if (!nom && !spec && !ville) {
                showToast('Veuillez renseigner au moins un critère de recherche.', 'warning');
                return;
            }
            showToast('🔍 Recherche lancée avec succès', 'success');
        });

        /* ===== CHOISIR SPÉCIALITÉ ===== */
        function choisirSpecialite(el) {
            const spec = el.dataset.spec;
            const selectSpec = document.getElementById('selectSpec');
            if(selectSpec) {
                for (let i = 0; i < selectSpec.options.length; i++) {
                    if (selectSpec.options[i].value.toLowerCase().includes(spec.substring(0, 5))) {
                        selectSpec.selectedIndex = i;
                        break;
                    }
                }
            }
            showToast(`Spécialité sélectionnée : ${el.querySelector('h6').textContent}`);
            document.getElementById('search')?.scrollIntoView({ behavior: 'smooth' });
        }

        /* ===== PRENDRE RDV ===== */
        function prendreRdv(nom, dispo) {
            if (!dispo) {
                showToast(`${nom} n'est pas disponible pour le moment.`, 'warning');
                return;
            }
            showToast(`✅ Demande de RDV envoyée à ${nom} !`, 'success');
        }

        /* ===== NAVIGATION SMOOTH ===== */
        document.getElementById('btnVoirTout')?.addEventListener('click', e => {
            e.preventDefault();
            showToast('Toutes les spécialités seront disponibles prochainement.', 'warning');
        });
        document.getElementById('btnVoirSpecs')?.addEventListener('click', e => {
            e.preventDefault();
            document.getElementById('specialites')?.scrollIntoView({ behavior: 'smooth' });
        });

        /* ===== ANIMATION FLOAT ===== */
        const style = document.createElement('style');
        style.textContent = `
            @keyframes floatUp {
                0%   { transform: translateY(0); }
                100% { transform: translateY(-12px); }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>