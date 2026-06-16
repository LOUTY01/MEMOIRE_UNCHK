<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Sama Santé</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

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

        /* PARTIE GAUCHE */

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
            font-size: 70px;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 30px;
        }

        .welcome-content p {
            font-size: 22px;
            line-height: 1.7;
            margin-bottom: 50px;
        }

        .doctor-image {
    width: 320px;
    height: 420px;
    object-fit: cover;
    border-radius: 20px;
    display: block;
    margin: auto;
    box-shadow: 0 20px 50px rgba(0,0,0,.15);
}
        .left-bottom {
            display: flex;
            justify-content: center;
            gap: 50px;
            font-size: 18px;
        }

        /* PARTIE DROITE */

        .right-panel {
            background: white;
            padding: 50px 70px;
        }

        .form-container {
            max-width: 700px;
            margin: auto;
        }

        .form-container h2 {
            font-size: 62px;
            font-weight: 800;
            color: #111;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #666;
            font-size: 18px;
            margin-bottom: 35px;
        }

        .patient-card {
            width: 230px;
            height: 120px;
            background: #dff0fd;
            border-radius: 18px;
            margin: auto;
            margin-bottom: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .patient-icon {
            width: 55px;
            height: 55px;
            background: #0b86d5;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-bottom: 10px;
        }

        .patient-card span {
            color: #0b86d5;
            font-weight: 600;
        }

        .form-label {
            font-weight: 600;
            margin-bottom: 8px;
        }

        .form-control {
            background: #f2f4f7;
            border: none;
            height: 56px;
            border-radius: 12px;
            padding-left: 20px;
        }

        .form-control:focus {
            box-shadow: none;
            border: 2px solid #1f93df;
        }

        .gender {
            display: flex;
            gap: 40px;
            margin-top: 15px;
        }

        .password-box {
            position: relative;
        }

        .password-box i {
            position: absolute;
            right: 18px;
            top: 20px;
            color: #888;
        }

        .terms {
            margin-top: 15px;
            margin-bottom: 25px;
        }

        .terms a {
            text-decoration: none;
            color: #1688d4;
            font-weight: 600;
        }

        .btn-register {
            width: 100%;
            height: 62px;
            border: none;
            border-radius: 16px;
            color: white;
            font-size: 22px;
            font-weight: 700;
            background: linear-gradient(90deg, #248fd8, #2da8f3);
        }

        .btn-register:hover {
            opacity: .95;
        }

        .separator {
            text-align: center;
            position: relative;
            margin: 30px 0;
            color: #777;
        }

        .separator::before {
            content: "";
            position: absolute;
            width: 35%;
            height: 1px;
            background: #ddd;
            left: 0;
            top: 50%;
        }

        .separator::after {
            content: "";
            position: absolute;
            width: 35%;
            height: 1px;
            background: #ddd;
            right: 0;
            top: 50%;
        }

        .social-buttons {
            display: flex;
            gap: 20px;
        }

        .social-btn {
            flex: 1;
            height: 58px;
            border-radius: 12px;
            border: 1px solid #ddd;
            background: white;
            font-size: 22px;
        }

        .login-link {
            text-align: center;
            margin: 30px 0;
        }

        .login-link a {
            text-decoration: none;
            color: #1688d4;
            font-weight: 700;
        }

        .extra-features {
            display: flex;
            justify-content: center;
            gap: 35px;
            margin-top: 25px;
            margin-bottom: 25px;
            color: #555;
            flex-wrap: wrap;
        }

        .extra-features i {
            color: #1892de;
        }

        .security-box {
            background: #f7f7f7;
            border-radius: 18px;
            padding: 22px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .security-icon {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            background: #1688d4;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .security-text {
            font-size: 14px;
            color: #444;
        }

        @media(max-width:991px) {

            .left-panel {
                display: none;
            }

            .right-panel {
                padding: 30px;
            }

            .form-container h2 {
                font-size: 42px;
            }
        }
        .back-home{
    display:inline-flex;
    align-items:center;
    gap:8px;
    text-decoration:none;
    color:#0b86d5;
    font-weight:600;
    margin-bottom:25px;
    transition:0.3s;
}

.back-home:hover{
    color:#006eb8;
    transform:translateX(-3px);
}
    </style>
</head>

<body>

    <div class="container-fluid register-page">
        <div class="row min-vh-100">

            <!-- GAUCHE -->

            <div class="col-lg-5 left-panel">

                <div class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                    <span>Sama Santé</span>
                </div>

                <div class="welcome-content">

                    <h1>
                        Rejoignez Sama<br>
                        Santé
                    </h1>

                    <p>
                        Accédez à l'excellence médicale sénégalaise.
                        Une plateforme connectée pour votre santé,
                        où que vous soyez.
                    </p>

                    <img src="{{ asset('images/im-inscription.jpeg') }}"
                        class="doctor-image"
                        alt="">
                </div>

                <div class="left-bottom">
                    <div>
                        <i class="fa-solid fa-hospital"></i>
                        25+ Établissements
                    </div>

                    <div>
                        <i class="fa-solid fa-shield-heart"></i>
                        Données Sécurisées
                    </div>
                </div>

            </div>

            <!-- DROITE -->

            <div class="col-lg-7 right-panel">

                <div class="form-container">
                    <a href="{{ route('accueil') }}" class="back-home">
    <i class="fa-solid fa-arrow-left"></i>
    Retour à l'accueil
</a>

                    <h2>Créez votre compte</h2>

                    <p class="subtitle">
                        Prêt à simplifier votre parcours de soins ?
                        Remplissez les informations ci-dessous.
                    </p>

                    <div class="patient-card">

                        <div class="patient-icon">
                            <i class="fa-regular fa-user"></i>
                        </div>

                        <span>Patient</span>

                    </div>

                    <form>

                        <div class="row">

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Nom Complet</label>
                                <input type="text"
                                    class="form-control"
                                    placeholder="Nom complet">
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Email</label>
                                <input type="email"
                                    class="form-control"
                                    placeholder="exemple@gmail.com">
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Téléphone</label>
                                <input type="text"
                                    class="form-control"
                                    placeholder="+221 77 000 00 00">
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Date de Naissance</label>
                                <input type="date"
                                    class="form-control">
                            </div>

                            <div class="col-12 mb-4">

                                <label class="form-label">Sexe</label>

                                <div class="gender">
                                    <label>
                                        <input type="radio" name="sexe">
                                        Homme
                                    </label>

                                    <label>
                                        <input type="radio" name="sexe">
                                        Femme
                                    </label>
                                </div>

                            </div>

                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Mot de passe
                                </label>

                                <div class="password-box">
                                    <input type="password" class="form-control">
                                    <i class="fa-regular fa-eye"></i>
                                </div>

                            </div>

                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Confirmer
                                </label>

                                <div class="password-box">
                                    <input type="password" class="form-control">
                                    <i class="fa-regular fa-eye"></i>
                                </div>

                            </div>

                        </div>

                        <div class="terms">

                            <input type="checkbox">

                            J'accepte les
                            <a href="#">Conditions d'Utilisation</a>
                            et la
                            <a href="#">Politique de Confidentialité</a>

                        </div>

                        <button type="submit" class="btn-register">
                            Créer mon compte
                            <i class="fa-solid fa-arrow-right ms-2"></i>
                        </button>

                        <div class="separator">
                            Ou continuer avec
                        </div>

                        <div class="social-buttons">

                            <button class="social-btn" type="button">
                                <i class="fa-brands fa-google"></i>
                            </button>

                            <button class="social-btn" type="button">
                                <i class="fa-brands fa-facebook"></i>
                            </button>

                            <button class="social-btn" type="button">
                                <i class="fa-brands fa-apple"></i>
                            </button>

                        </div>

                        <div class="login-link">
                            Vous avez déjà un compte ?
                            <a href="{{ route('login') }}">
    Connexion
</a>
                        </div>

                        <hr>

                        <div class="extra-features">

                            <div>
                                <i class="fa-solid fa-bolt"></i>
                                Réservation rapide
                            </div>

                            <div>
                                <i class="fa-solid fa-shield"></i>
                                Paiement sécurisé
                            </div>

                            <div>
                                <i class="fa-solid fa-clock"></i>
                                File d'attente intelligente
                            </div>

                        </div>

                        <div class="security-box">

                            <div class="security-icon">
                                <i class="fa-solid fa-shield-heart"></i>
                            </div>

                            <div class="security-text">
                                Vos données médicales sont protégées par le secret
                                professionnel et stockées sur des serveurs sécurisés.
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>

</body>

</html>