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
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul style="margin:0;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{ route('register.store') }}">
    @csrf

    <div class="row">

        <!-- NOM -->
        <div class="col-md-6 mb-4">
            <label>Nom Complet</label>
            <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" required>
            @error('nom')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- EMAIL -->
        <div class="col-md-6 mb-4">
            <label>Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required>
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- TELEPHONE -->
        <div class="col-md-6 mb-4">
            <label>Téléphone</label>
            <input type="text" name="telephone" class="form-control @error('telephone') is-invalid @enderror" required>
            @error('telephone')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- DATE -->
        <div class="col-md-6 mb-4">
            <label>Date de Naissance</label>
            <input type="date" name="date_naissance" class="form-control @error('date_naissance') is-invalid @enderror" required>
            @error('date_naissance')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- SEXE -->
        <div class="col-12 mb-4">
            <label>Sexe</label><br>

            <label>
                <input type="radio" name="sexe" value="Homme" required>
                Homme
            </label>

            <label>
                <input type="radio" name="sexe" value="Femme" required>
                Femme
            </label>

            @error('sexe')
                <br><small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- PASSWORD -->
        <div class="col-md-6 mb-4">
            <label>Mot de passe</label>

            <div class="input-group">
                <input type="password" id="password" name="password"
                       class="form-control @error('password') is-invalid @enderror"
                       required>

                <span class="input-group-text" onclick="togglePassword('password', this)">
                    👁
                </span>
            </div>

            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- CONFIRM PASSWORD -->
        <div class="col-md-6 mb-4">
            <label>Confirmer mot de passe</label>

            <div class="input-group">
                <input type="password" id="password_confirmation" name="password_confirmation"
                       class="form-control" required>

                <span class="input-group-text"
                      onclick="togglePassword('password_confirmation', this)">
                    👁
                </span>
            </div>
        </div>

    </div>

    <!-- TERMS -->
    <div class="mb-3">
        <input type="checkbox" name="terms" required>
        J'accepte les conditions
    </div>

    <button type="submit" class="btn btn-primary">
        Créer mon compte
    </button>
</form>
<script>
function togglePassword(id, icon) {
    const input = document.getElementById(id);

    if (input.type === "password") {
        input.type = "text";
        icon.innerHTML = "🙈";
    } else {
        input.type = "password";
        icon.innerHTML = "👁";
    }
}
</script>
                        <div class="separator">
                            Ou continuer avec
                        </div>

                        <div class="social-buttons">

                            <button class="social-btn" type="button">
                               <a href="{{ route('google.login') }}" class="social-btn text-decoration-none text-dark d-flex align-items-center justify-content-center gap-2">
    <i class="fa-brands fa-google"></i>
    Google
</a>
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