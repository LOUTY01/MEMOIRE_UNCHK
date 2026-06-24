<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Sama Santé</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", sans-serif;
        }

        body {
            background: #f6f6f6;
            overflow-x: hidden;
        }

        .register-page {
            min-height: 100vh;
        }

        .left-panel {
            background: linear-gradient(180deg, #006eb8 0%, #2da8f3 100%);
            color: white;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 20px;
            font-weight: 700;
        }

        .logo img {
            width: 34px;
            height: 34px;
        }

        .welcome-content {
            text-align: center;
        }

        .welcome-content h1 {
            font-size: 60px;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 30px;
        }

        .welcome-content p {
            font-size: 18px;
            line-height: 1.7;
            margin-bottom: 40px;
        }

        .doctor-image {
            width: 320px;
            height: 420px;
            object-fit: cover;
            border-radius: 20px;
            margin: auto;
            display: block;
        }

        .right-panel {
            background: white;
            padding: 50px;
        }

        .form-container {
            max-width: 700px;
            margin: auto;
        }

        .form-container h2 {
            font-size: 48px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #666;
            margin-bottom: 25px;
        }

        .patient-card {
            width: 220px;
            height: 110px;
            background: #dff0fd;
            border-radius: 18px;
            margin: auto;
            margin-bottom: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .patient-icon {
            width: 50px;
            height: 50px;
            background: #0b86d5;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-bottom: 8px;
        }

        .form-control {
            background: #f2f4f7;
            border: none;
            height: 50px;
            border-radius: 10px;
        }

        .btn-register {
            width: 100%;
            height: 55px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(90deg, #248fd8, #2da8f3);
            color: white;
            font-weight: 700;
        }

        .separator {
            text-align: center;
            margin: 25px 0;
            color: #777;
        }

        .social-btn {
            width: 100%;
            height: 50px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background: white;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
        }

        .login-link a {
            color: #1688d4;
            font-weight: 700;
            text-decoration: none;
        }

        .back-home {
            display: inline-flex;
            gap: 8px;
            margin-bottom: 20px;
            text-decoration: none;
            color: #0b86d5;
            font-weight: 600;
        }
    </style>
</head>

<body>

<div class="container-fluid register-page">
    <div class="row min-vh-100">

        <!-- GAUCHE -->
        <div class="col-lg-5 left-panel">

            <div class="logo">
                <img src="{{ asset('images/logo.png') }}">
                Sama Santé
            </div>

            <div class="welcome-content">
                <h1>Rejoignez Sama Santé</h1>
                <p>Une plateforme moderne pour simplifier vos soins médicaux.</p>

                <img src="{{ asset('images/im-inscription.jpeg') }}" class="doctor-image">
            </div>

        </div>

        <!-- DROITE -->
        <div class="col-lg-7 right-panel">

            <div class="form-container">

                <a href="{{ route('accueil') }}" class="back-home">
                    <i class="fa fa-arrow-left"></i> Retour
                </a>

                <h2>Créez votre compte</h2>
                <p class="subtitle">Remplissez vos informations</p>

                <div class="patient-card">
                    <div class="patient-icon">
                        <i class="fa fa-user"></i>
                    </div>
                    Patient
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- FORMULAIRE -->
                <form method="POST" action="{{ route('register.store') }}">
                    @csrf

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <input type="text" name="nom" class="form-control" placeholder="Nom complet" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <input type="text" name="telephone" class="form-control" placeholder="Téléphone" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <input type="date" name="date_naissance" class="form-control" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmer" required>
                        </div>

                    </div>

                    <button type="submit" class="btn-register">
                        Créer mon compte
                    </button>

                </form>

                <!-- SOCIAL -->
                <div class="separator">Ou continuer avec</div>

                <a href="{{ route('google.login') }}">
                    <button class="social-btn">
                        <i class="fa-brands fa-google"></i> Google
                    </button>
                </a>

                <div class="login-link">
                    Déjà un compte ?
                    <a href="{{ route('login') }}">Connexion</a>
                </div>

            </div>

        </div>

    </div>
</div>

</body>
</html>