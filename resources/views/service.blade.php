<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sama Santé</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>

<header>

    <div class="logo">
        <i class="fa-solid fa-heart-circle-check"></i>
        <h2>Sama Santé</h2>
    </div>

    <nav>
        <a href="#">Accueil</a>
        <a class="active" href="#">Services</a>
        <a href="#">À propos</a>
        <a href="#">Rendez-vous</a>
        <a href="#">Contact</a>
    </nav>

    <div class="menu-droite">

        <div class="zone-recherche">
            <input type="text" placeholder="Rechercher un rendez-vous...">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>

        <i class="fa-solid fa-bell"></i>

        <a href="#"; alt="lien du rendez vous ici">
            <img src="{{ asset('images/homme.png') }}" alt="Photo de profil">
        </a>

    </div>

</header>

<section class="notre-texte">

    <div class="contenue">

        <div class="badge">
            <i class="fa-solid fa-circle"></i>
            Nos Services
        </div>

        <h1>
            DES SERVICES DE SANTÉ MODERNES
            CONÇUS
            <span>POUR SIMPLIFIER VOTRE QUOTIDIEN</span>
        </h1>

        <p>
            Nous allions expertise médicale et innovation technologique
            <br>
            pour offrir aux Sénégalais une expérience
            <br>
            de soin fluide, humaine et accessible partout.
        </p>

        <div class="centre">
            <button>Découvrir nos solutions</button>
        </div>

    </div>

</section>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    padding:10px;
    background-image:url('{{ asset("images/hopital.png") }}');
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
}

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

.logo i,
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

.zone-recherche{
    display:flex;
    align-items:center;
    background:#f0f0f0;
    padding:8px 15px;
    border-radius:25px;
}

.zone-recherche input{
    border:none;
    outline:none;
    background:transparent;
}

.zone-recherche i{
    color:rgb(134,98,98);
}

.menu-droite img{
    width:35px;
    height:35px;
    border-radius:50%;
    object-fit:cover;
}

.notre-texte{
    margin-top:10px;
    height:600px;

    background-image:url('{{ asset("images/accueil.jpeg") }}');
    background-size:cover;
    background-position:center;

    border-radius:0 0 120px 0;
    position:relative;
}

.contenue{
    position:absolute;
    top:30px;
    left:0;
    width:550px;

    background:rgba(255,255,255,0.75);

    padding:25px;

    border-radius:0 40px 40px 0;

    backdrop-filter:blur(4px);
}

.badge{
    display:inline-flex;
    align-items:center;
    gap:10px;

    background:#1688e8;
    color:white;

    padding:7px 15px;

    border-radius:20px;
    font-size:12px;
}

.badge i{
    font-size:8px;
}

h1{
    margin-top:20px;
    font-size:30px;
    font-style:italic;
    text-align:center;
    line-height:1.2;
}

h1 span{
    color:#1688e8;
}

p{
    margin-top:25px;
    font-size:18px;
    text-align:center;
    line-height:1.6;
}

button{
    margin-top:30px;
    background:#1688e8;
    color:white;
    border:none;
    padding:18px 30px;
    border-radius:8px;
    cursor:pointer;
}

button:hover{
    background:#0f73c8;
}

.centre{
    text-align:center;
}

</style>

</body>
</html>