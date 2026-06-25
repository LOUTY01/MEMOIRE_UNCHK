<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Sama Santé</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            font-family:'Segoe UI',sans-serif;
            background:#f7fbff;
        }

        .navbar{
            background:#fff;
            box-shadow:0 2px 15px rgba(0,0,0,.05);
        }

        .logo{
            color:#1c8adb;
            font-size:22px;
            font-weight:700;
            text-decoration:none;
        }

        .hero-services{
            padding:100px 20px;
            text-align:center;
            background:linear-gradient(135deg,#1593e8,#0077c8);
            color:white;
        }

        .service-card{
            background:white;
            border-radius:15px;
            padding:30px;
            box-shadow:0 5px 20px rgba(0,0,0,.08);
            height:100%;
            text-align:center;
        }

        .service-card i{
            font-size:50px;
            color:#1593e8;
            margin-bottom:20px;
        }

        .footer{
            background:#0f8fe4;
            color:white;
            text-align:center;
            padding:20px;
            margin-top:50px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">

        <a href="{{ route('accueil') }}" class="logo">
            Sama Santé
        </a>

        <div class="ms-auto">
            <a href="{{ route('accueil') }}" class="btn btn-outline-primary">
                Retour Accueil
            </a>
        </div>

    </div>
</nav>

<section class="hero-services">
    <div class="container">
        <h1>NOS SERVICES</h1>
        <p>
            Découvrez tous les services proposés par Sama Santé.
        </p>
    </div>
</section>

<div class="container py-5">

    <div class="row g-4">

        <div class="col-md-4">
            <div class="service-card">
                <i class="fas fa-user-doctor"></i>
                <h4>Consultation médicale</h4>
                <p>
                    Prenez rendez-vous avec un médecin rapidement.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="service-card">
                <i class="fas fa-calendar-check"></i>
                <h4>Prise de rendez-vous</h4>
                <p>
                    Réservez vos consultations en ligne.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="service-card">
                <i class="fas fa-ticket"></i>
                <h4>Achat de ticket</h4>
                <p>
                    Obtenez votre ticket de consultation à distance.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="service-card">
                <i class="fas fa-users"></i>
                <h4>Gestion des files</h4>
                <p>
                    Suivez votre position dans la file d'attente.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="service-card">
                <i class="fas fa-clock"></i>
                <h4>Gain de temps</h4>
                <p>
                    Évitez les longues attentes dans les centres médicaux.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="service-card">
                <i class="fas fa-truck-medical"></i>
                <h4>Urgences</h4>
                <p>
                    Accédez rapidement aux services d'urgence.
                </p>
            </div>
        </div>

    </div>

</div>

<footer class="footer">
    © 2025 Sama Santé - Tous droits réservés
</footer>

</body>
</html>