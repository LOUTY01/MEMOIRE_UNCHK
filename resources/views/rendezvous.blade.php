<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Prise de rendez-vous - Sama Santé</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        body {
            background: #f5f7fb;
            font-family: 'Segoe UI', sans-serif;
        }

        /* NAVBAR */
        .navbar {
            background: white;
            box-shadow: 0 2px 15px rgba(0,0,0,.08);
        }

        .logo {
            color: #1294e7;
            font-weight: 700;
        }

        .nav-link {
            color: #222;
            font-size: 14px;
        }

        .nav-link.active {
            color: #1294e7 !important;
            font-weight: 600;
        }

        /* HERO */
        .hero {
            height: 600px;
            background: linear-gradient(rgba(255,255,255,.2), rgba(255,255,255,.2)),
                        url('{{ asset("images/rendezvous.jpg") }}');
            background-size: cover;
            background-position: center;
            border-bottom-left-radius: 100px;
            display: flex;
            align-items: center;
        }

        .hero-card {
            background: rgba(255,255,255,.85);
            backdrop-filter: blur(10px);
            padding: 35px;
            border-radius: 20px;
            max-width: 500px;
        }

        .hero-card h1 {
            font-size: 40px;
            font-weight: 800;
        }

        .hero-card span {
            color: #1294e7;
        }

        .btn-main {
            background: #1294e7;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 10px;
        }

        /* FORM */
        .booking-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            margin-top: 30px;
            box-shadow: 0 3px 20px rgba(0,0,0,.05);
        }

        .doctor-card {
            display: flex;
            gap: 15px;
            background: #eef7ff;
            padding: 12px;
            border-radius: 12px;
            margin-top: 10px;
            cursor: pointer;
        }

        .doctor-card img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }

        .time-btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 10px;
            background: #eef2f7;
        }

        .time-btn:hover {
            background: #1294e7;
            color: white;
        }

        .pay-btn {
            background: #1294e7;
            color: white;
            border: none;
            width: 100%;
            padding: 12px;
            border-radius: 10px;
        }

        .payment-card {
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 3px 15px rgba(0,0,0,.05);
        }

        footer {
            background: linear-gradient(135deg,#0077d7,#12a0ff);
            color: white;
            padding: 60px 0 20px;
            margin-top: 50px;
        }

        footer i {
            background: white;
            color: #1294e7;
            padding: 10px;
            border-radius: 50%;
            margin-right: 8px;
        }

    </style>

</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
    <div class="container">

        <a class="navbar-brand logo" href="#">
            <i class="fa-solid fa-shield-heart"></i>
            Sama Santé
        </a>

        <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link" href="/">Accueil</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="#">À propos</a></li>
            <li class="nav-item"><a class="nav-link active" href="#">Rendez-vous</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>

    </div>
</nav>

<!-- HERO -->
<section class="hero">
    <div class="container">
        <div class="hero-card">

            <h1>
                Réservez votre consultation
                <span>en quelques minutes</span>
            </h1>

            <p>
                Choisissez votre service, sélectionnez un médecin et confirmez votre rendez-vous facilement.
            </p>

            <button class="btn-main">
                En savoir plus
            </button>

        </div>
    </div>
</section>

<!-- FORMULAIRE -->
<div class="container">

    <div class="booking-card">

        <h3 class="text-center fw-bold mb-4">Finaliser votre rendez-vous</h3>

        <form method="POST" action="/rendez-vous">
            @csrf

            <label>Service</label>
            <select class="form-select mb-3" name="service">
                <option>Consultation générale</option>
                <option>Pédiatrie</option>
                <option>Cardiologie</option>
                <option>Dermatologie</option>
            </select>

            <label>Médecins disponibles</label>

            <div class="doctor-card">
                <img src="https://i.pravatar.cc/60?u=1">
                <div>
                    <strong>Dr. Moustapha Diop</strong><br>
                    Cardiologue
                </div>
            </div>

            <div class="doctor-card">
                <img src="https://i.pravatar.cc/60?u=2">
                <div>
                    <strong>Dr. Awa Seck</strong><br>
                    Pédiatre
                </div>
            </div>

            <div class="row mt-4">

                <div class="col-md-6 mb-3">
                    <input class="form-control" name="nom" placeholder="Nom complet" required>
                </div>

                <div class="col-md-6 mb-3">
                    <input class="form-control" name="telephone" placeholder="Téléphone" required>
                </div>

                <div class="col-md-6 mb-3">
                    <input type="date" class="form-control" name="date" required>
                </div>

                <div class="col-md-6 mb-3">
                    <input type="time" class="form-control" name="heure" required>
                </div>

            </div>

            <div class="payment-card mt-4">

                <h5>Méthode de paiement</h5>

                <label><input type="radio" name="paiement" value="wave" checked> Wave</label>
                <label class="ms-3"><input type="radio" name="paiement" value="orange"> Orange Money</label>

            </div>

            <div class="payment-card mt-3">

                <div class="d-flex justify-content-between">
                    <span>Consultation</span>
                    <span>10.000 FCFA</span>
                </div>

                <div class="d-flex justify-content-between">
                    <span>Frais</span>
                    <span>500 FCFA</span>
                </div>

                <hr>

                <div class="d-flex justify-content-between fw-bold">
                    <span>Total</span>
                    <span style="color:#1294e7;">10.500 FCFA</span>
                </div>

                <button class="pay-btn mt-3" type="submit">
                    Payer maintenant
                </button>

            </div>

        </form>

    </div>

</div>

<!-- FOOTER -->
<footer>
    <div class="container">

        <div class="row">

            <div class="col-lg-4">
                <h4>Sama Santé</h4>
                <p>Plateforme de réservation médicale intelligente au Sénégal.</p>
            </div>

            <div class="col-lg-4">
                <h5>Navigation</h5>
                <p>Accueil</p>
                <p>Services</p>
                <p>Rendez-vous</p>
            </div>

            <div class="col-lg-4">
                <h5>Contact</h5>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-linkedin"></i>
            </div>

        </div>

    </div>
</footer>

</body>
</html>