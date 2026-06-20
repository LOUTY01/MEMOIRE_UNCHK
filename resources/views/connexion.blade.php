<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Sama Santé</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
    font-family: "Segoe UI", sans-serif;
    min-height: 100vh;
    overflow-y: auto;
    background: #fff;
}

.main-container {
    display: flex;
    min-height: 100vh;
}
        /* =======================
           PARTIE GAUCHE
        ======================= */

        .left-side {
            width: 50%;
            background: linear-gradient(135deg, #0b5f9c 0%, #1da1f2 100%);
            color: white;
            padding: 40px 60px;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .logo {
            font-size: 18px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo i {
            font-size: 22px;
        }

        .welcome {
            margin-top: 100px;
        }

        .welcome h1 {
            font-size: 72px;
            font-weight: 800;
            line-height: 1.15;
        }

        .welcome p {
            font-size: 20px;
            margin-top: 30px;
            color: rgba(255,255,255,.9);
            max-width: 550px;
        }

        .image-box {
            margin-top: 70px;
            text-align: center;
        }

        .image-box img {
            width: 420px;
            height: 420px;
            object-fit: cover;
            border-radius: 30px;
            box-shadow: 0 20px 40px rgba(0,0,0,.15);
        }

        .separator {
            margin-top: 40px;
            border-top: 1px solid rgba(255,255,255,.3);
        }

        .stats {
            margin-top: auto;
            display: flex;
            gap: 90px;
            padding-top: 40px;
        }

        .stat-number {
            font-size: 48px;
            font-weight: 800;
        }

        .stat-label {
            color: rgba(255,255,255,.85);
            font-size: 18px;
        }

        /* =======================
           PARTIE DROITE
        ======================= */

        .right-side {
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
        }

        .login-card {
            width: 520px;
        }

        .login-card h2 {
            text-align: center;
            font-size: 52px;
            font-weight: 700;
            color: #222;
        }

        .login-card .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 50px;
            font-size: 18px;
        }

        .form-label {
            font-weight: 600;
            margin-bottom: 10px;
        }

        .input-group {
            background: #f4f4f6;
            border-radius: 14px;
            overflow: hidden;
            margin-bottom: 25px;
        }

        .input-group-text {
            background: transparent;
            border: none;
            color: #888;
        }

        .form-control {
            background: transparent;
            border: none;
            height: 60px;
            font-size: 16px;
        }

        .form-control:focus {
            box-shadow: none;
        }

        .options {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .options a {
            text-decoration: none;
            color: #1d8fe1;
            font-weight: 500;
        }

        .btn-login {
            width: 100%;
            height: 60px;
            border: none;
            border-radius: 15px;
            background: #1d8fe1;
            color: white;
            font-size: 18px;
            font-weight: 600;
            transition: .3s;
        }

        .btn-login:hover {
            background: #0d7fd5;
        }

        .divider {
            text-align: center;
            margin: 35px 0;
            color: #777;
            position: relative;
        }

        .divider::before,
        .divider::after {
            content: "";
            position: absolute;
            width: 35%;
            height: 1px;
            background: #ddd;
            top: 50%;
        }

        .divider::before {
            left: 0;
        }

        .divider::after {
            right: 0;
        }

        .social-buttons {
            display: flex;
            gap: 20px;
        }

        .social-btn {
            flex: 1;
            height: 58px;
            border: 1px solid #d9d9d9;
            border-radius: 12px;
            background: white;
            font-size: 18px;
            font-weight: 500;
        }

        .signup {
            text-align: center;
            margin-top: 40px;
            font-size: 18px;
        }

        .signup a {
            text-decoration: none;
            color: #1d8fe1;
            font-weight: 700;
        }

        @media(max-width:991px) {

            body {
                overflow: auto;
            }

            .main-container {
                flex-direction: column;
            }

            .left-side,
            .right-side {
                width: 100%;
            }

            .welcome h1 {
                font-size: 48px;
            }

            .image-box img {
                width: 100%;
                max-width: 350px;
                height: auto;
            }

            .stats {
                gap: 30px;
                flex-wrap: wrap;
            }

            .login-card {
                width: 90%;
                padding: 40px 0;
            }
        }
    </style>
</head>

<body>

<div class="main-container">

    <!-- GAUCHE -->
    <div class="left-side">

        <div class="logo">
            <i class="fa-regular fa-heart"></i>
            Sama Santé
        </div>

        <div class="mt-3">
            <a href="{{ route('accueil') }}" class="btn btn-light">
                <i class="fa-solid fa-arrow-left"></i>
                Retour à l'accueil
            </a>
        </div>

        <div class="welcome">
            <h1>Bienvenue sur<br>Sama Santé</h1>

            <p>
                Simplifiez vos rendez-vous médicaux et gérez votre
                parcours de soins en toute sérénité.
            </p>
        </div>

        <div class="image-box">
            <img src="{{ asset('images/im-connexion.jpeg') }}" alt="">
        </div>

        <div class="separator"></div>

        <div class="stats">
            <div>
                <div class="stat-number">10 000+</div>
                <div class="stat-label">Patients</div>
            </div>

            <div>
                <div class="stat-number">120+</div>
                <div class="stat-label">Médecins</div>
            </div>

            <div>
                <div class="stat-number">25+</div>
                <div class="stat-label">Structures</div>
            </div>
        </div>

    </div>

    <!-- DROITE -->
    <div class="right-side">

        <div class="login-card">

            <h2>Bon retour parmi nous</h2>

            <p class="subtitle">
                Connectez-vous à votre espace sécurisé.
            </p>

            {{-- ERREURS --}}
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            {{-- SUCCÈS --}}
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('login.post') }}" method="POST">
                @csrf

                <label class="form-label">Adresse e-mail</label>

                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-regular fa-envelope"></i>
                    </span>

                    <input type="email"
                           name="email"
                           class="form-control"
                           value="{{ old('email') }}"
                           placeholder="nom@exemple.com"
                           required>
                </div>

                <label class="form-label">Mot de passe</label>

<div class="input-group">
    <span class="input-group-text">
        <i class="fa-solid fa-lock"></i>
    </span>

    <input type="password"
           name="password"
           id="password"
           class="form-control"
           placeholder="••••••••"
           required>

    <span class="input-group-text" style="cursor:pointer;">
        <i class="fa-solid fa-eye" id="togglePassword"></i>
    </span>
</div>

                <div class="options">

                    <div>
                        <input type="checkbox" name="remember">
                        Se souvenir de moi
                    </div>

                    <a href="{{ route('password.request') }}">
    Mot de passe oublié ?
</a>

                </div>

                <button type="submit" class="btn-login">
                    Se connecter
                    <i class="fa-solid fa-arrow-right-to-bracket ms-2"></i>
                </button>

            </form>

            <div class="divider">
                OU CONTINUER AVEC
            </div>

            <div class="social-buttons">
                <button class="social-btn">
                    <a href="{{ route('google.login') }}" class="social-btn text-decoration-none text-dark d-flex align-items-center justify-content-center gap-2">
    <i class="fa-brands fa-google"></i>
    Google
</a>
                </button>

            </div>

            <div class="signup">
                Pas encore de compte ?
                <a href="{{ route('register') }}">S'inscrire</a>
            </div>

        </div>

    </div>

</div>
<script>
const togglePassword = document.getElementById('togglePassword');
const password = document.getElementById('password');

togglePassword.addEventListener('click', function () {

    const type = password.getAttribute('type') === 'password'
        ? 'text'
        : 'password';

    password.setAttribute('type', type);

    // changer l’icône
    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');
});
</script>
</body>
</html>